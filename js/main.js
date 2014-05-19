/******************
    General Initialization
  *****************/
$(document).ready(function() {
  
  /******************
    Geolocation
  *****************/
  $('.geolocator-trigger').click(function(){
    if ($(this).data('target'))
      setLocation($(this).data('target'));
  });
  
  //var geocoder = new google.maps.Geocoder();
  function setLocation(target) {
    //console.log(target);
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        //var lat = 40.714224;
        var lat = position.coords.latitude;
        var lng =  position.coords.longitude;
        //var lng =  -73.961452;
        var latlng = new google.maps.LatLng(lat, lng);
        geocoder.geocode({'latLng': latlng}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (results[0]) {
              //console.log (results);
              var len = results[0].address_components.length - 1;
              if (results[0].address_components instanceof Array 
                && len > -1
                && results[0].address_components[len].types instanceof Array
                && jQuery.inArray("postal_code", results[0].address_components[len].types) > -1) 
              {
                //console.log(results[0].address_components[len].long_name);
                //console.log($(target));
                $(target).val(results[0].address_components[len].long_name);
              }
              else {
                alert("Sorry, we couldn't retrieve your current postal code,");
              }
            } else {
              alert('No results found');
            }
          } else {
            alert('Geocoder failed due to: ' + status);
          }
        });
      });
    }
    else {
      alert("Geolocation is not supported by this browser.");
    }
  }
  function getAddressFromZipCode(zipCode,container) {
    geocoder.geocode({ 'address': zipCode }, function (result, status) {
      //start loop to get state from zip
      for (var component in result[0]['address_components']) {
        for (var i in result[0]['address_components'][component]['types']) {
          if (result[0]['address_components'][component]['types'][i] == "administrative_area_level_1") {
            container.state = result[0]['address_components'][component]['short_name']; // get state name
          }
          if (result[0]['address_components'][component]['types'][i] == "locality") {
            container.city = result[0]['address_components'][1]['long_name']; // get city name
          }
        }
      }
    });
  }
  /******************
    Local Storage
  *****************/
  //$.cookie.json = true; // old browsers support
  var storageSupport = typeof(Storage)!=="undefined"? true : false;

  function addToLocalArray(idName,idProperty,data,maxValue) {
    if (storageSupport) {
      var localData;
      if (localStorage.getItem(idName) !== null) {
        localData = localStorage.getItem(idName);
        localData = JSON.parse(localData);
        while (localData[idProperty].length >= maxValue)
          localData[idProperty].shift();
      }
      else {
        localData = new Object();
        localData[idProperty] = new Array();
        //console.log(localData);
      }
      localData[idProperty].unshift(data);
      saveToLocal(idName,localData);
    }
    // cookies?
  }
  function addToLocal(idName,idProperty,data) {
    //console.log(idProperty);
    if (storageSupport) {
      var localData;
      if (localStorage.getItem(idName) !== null) {
        localData = localStorage.getItem(idName);
        localData = JSON.parse(localData);
        //console.log(localData);
      }
      else {
        localData = new Object();
      }
      //console.log(localData);
      localData[idProperty] = data;
      saveToLocal(idName,localData);
      //console.log(localData);
    }
    // cookies?
  }
  function saveToLocal(idName,data) {
    if (storageSupport) {
      localStorage.setItem(idName,JSON.stringify(data));
      //console.log(data);
      //console.log(localStorage.getItem(idName))
    }
    // cookies?
  }
  function resetLocal(idName) {
    if (storageSupport) {
      localStorage.removeItem(idName);
    }
    // cookies?
  }
  function removeFromLocal(idName,idProperty) {
    if (storageSupport && localStorage.getItem(idName) !== null) {
      var localData;
      localData = localStorage.getItem(idName);
      localData = JSON.parse(localData);
      if (localData.hasOwnProperty(idProperty)) {
        delete localData[idProperty];
        saveToLocal(idName,localData);
      }
    }
    // cookies?
  }
  function loadFromLocal(idName) {
    if (storageSupport) {
      return localData = JSON.parse(localStorage.getItem(idName));
    }
    // cookies?
  }
  /******************
    Recent Search
  *****************/
  var idLocalItem = "recentSearch";
  var idLocalItemProperty = "searchList";
  var maxRecentElements = 10;
  
  $('a[data-toggle="tab"][href="#recent-searches"]').on('shown.bs.tab', function (e) {
    var recent = loadFromLocal(idLocalItem);
    //console.log(recent);
    if (recent !== null && recent.searchList.length > 0) {
      var container = $($(e.target).attr('href')).children('.recent-list');
      container.empty();
      for (var i = 0; i < recent.searchList.length; i++) {
      
        var listItem = document.createElement('li');
        var anchor = $(document.createElement('a')).addClass('recent-go-link btn btn-callOA').attr('href',recent.searchList[i].url).text('Go');
        var heading4 = $(document.createElement('h4')).addClass('recent-head');
        if (recent.searchList[i].raw.make !== undefined)
        {
          var spanMake = $(document.createElement('span')).addClass('recent-make').text(recent.searchList[i].raw.make.charAt(0).toUpperCase() + recent.searchList[i].raw.make.slice(1));
          heading4.append(spanMake);
        }
        if (recent.searchList[i].raw.model !== undefined) {
          var spanModel = $(document.createElement('span')).addClass('recent-model').text(recent.searchList[i].raw.model.toUpperCase());
          heading4.append(document.createTextNode(' - '), spanModel);
        }
        if (recent.searchList[i].raw.type !== undefined) {
          var span = $(document.createElement('span')).addClass('recent-type').text(recent.searchList[i].raw.type.charAt(0).toUpperCase() + recent.searchList[i].raw.type.slice(1));
          heading4.append(document.createTextNode(' - '), span);
        }
        var paragraph = $(document.createElement('span')).addClass('recent-desc');
        if (recent.searchList[i].raw.anyPrice !== undefined) {
          var span = $(document.createElement('span')).addClass('recent-price').text('Any Price');
          paragraph.append(span);
        }
        else if (recent.searchList[i].raw.maxPrice !== undefined) {
          var span = $(document.createElement('span')).addClass('recent-model').text('$'+addCommas(recent.searchList[i].raw.maxPrice));
          paragraph.append(span);
        }
        if (recent.searchList[i].raw.zipCode !== undefined) {
          var span = $(document.createElement('span')).addClass('recent-location').text(recent.searchList[i].raw.zipCode);
          paragraph.append(document.createTextNode(' - '), span);
        }
        var listItem = $(document.createElement('li')).append(anchor,heading4,paragraph);
        //console.log(listItem);
        container.append(listItem);
        //console.log(container);
        //console.log(container.children('.recent-list'));
      }
    }
  });
  
  $( "#basic-search" ).submit(function( event ) {
    // event.preventDefault();
    // resetLocal(idLocalItem);
    var searchRaw = $(this).serializeObject();
    if (!jQuery.isEmptyObject(searchRaw) && searchRaw.zipCode !== undefined) {
      var cityState = {city: "", state:""};
      getAddressFromZipCode(searchRaw.zipCode,cityState);
      //console.log(cityState);
      var searchData = {
        raw: searchRaw,
        url: $(this).attr('action') + "?" + EncodeQueryData(searchRaw),
        address: cityState
      };
      //console.log(searchData);
      //console.log( JSON.stringify(searchData));
      addToLocalArray (idLocalItem,idLocalItemProperty,searchData,maxRecentElements);
    }
    else {
      alert(searchRaw.zipCode === undefined? 'Provide us a location' : 'Your search is empty');
      event.preventDefault();
    }
  });
  function EncodeQueryData(data) {
    var ret = [];
    for (var d in data)
      ret.push(encodeURIComponent(d) + "=" + encodeURIComponent(data[d]));
    return ret.join("&");
  }
  /******************
    Saved Vehicles
  *****************/
  var savedId = "savedVehicles";
  $( ".save-vehicle-trigger" ).click(function( event ) {
    if ($(this).data('status') == 'unsaved') {
      var data = {
        image: $(this).data('img'),
        make: $(this).data('make'),
        model: $(this).data('model'),
        year: $(this).data('year'),
        price: $(this).data('price')
      };
      var id = $(this).data('vid');
      if (id) {
        addToLocal(savedId,id,data);
       //console.log(id+' '+data);
        $(this).removeClass('button-on').data('status','saved');
      }
    }
    else if ($(this).data('status') == 'saved') {
      var id = $(this).data('vid');
      if (id) {
        removeFromLocal(savedId,id);
        $(this).data('status','unsaved').addClass('button-off');
      }
    }
  });
  function updateSaveButton() {
    //if ($( ".save-vehicle-trigger" ).data('status') == "saved") {
      
    //}
  }
  $('a[data-toggle="tab"][href="#saved-list"]').on('shown.bs.tab', function (e) {
    var saved = loadFromLocal(savedId);
    //console.log(saved);
    if (saved !== null && objSize(saved) > 0) {
      var container = $($(e.target).attr('href')).children('.saved-items');
      container.empty();
      for (key in saved) {
        if (saved.hasOwnProperty(key)) {
          var listItem = $(document.createElement('li')).addClass('col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12');
          var image = $(document.createElement('img')).attr('src',saved[key].image);
          var anchor = $(document.createElement('a')).addClass('').attr('href','vdp.php').append(image);
          listItem.append(anchor);
          anchor = $(document.createElement('a')).addClass('').attr('href','vdp.php');
          if (saved[key].make !== undefined)
          {
            anchor.text(saved[key].make);
          }
          if (saved[key].year !== undefined)
          {
            var span = $(document.createElement('span')).addClass('saved-year').text(saved[key].year+" ");
            anchor.prepend(span);
          }
          var heading4 = $(document.createElement('h4')).addClass('saved-title').append(anchor);
          listItem.append(heading4);
          if (saved[key].model !== undefined)
          {
            var div = $(document.createElement('div')).addClass('saved-model').text(saved[key].model);
            listItem.append(div);
          }
          if (saved[key].price !== undefined) {
            var div = $(document.createElement('div')).addClass('saved-price').text(saved[key].price);
            listItem.append(div);
          }
          
          //console.log(listItem);
          container.append(listItem);
          //console.log(container);
          //console.log(container.children('.saved-list'));
        }
      }
    }
  });
  function objSize (obj) {
    var size = 0, key;
    for (key in obj) {
      if (obj.hasOwnProperty(key)) size++;
    }
    return size;
  };
  /******************
    Sticky sidebar
  *****************/
  $(window).load( function() {
    var topHeight = $('#site-header').outerHeight();
    var bottomHeight = $('#site-footer').outerHeight() + 120;
    var viewportWidth =  window.innerWidth || document.documentElement.clientWidth || $(window).width();
    var contentHeight =  $('#page-content').outerHeight();
    //console.log(contentHeight+ " "+ $('#sidebar').outerHeight());
    if (viewportWidth > 767 && contentHeight > $('#sidebar').outerHeight() ) {
      $('#sidebar').affix({
        offset: {
          top: topHeight,
          bottom: bottomHeight
        }
      }).on('affix.bs.affix', function () {
        $(this).css({
          top: topHeight
        });
      }).on('affix-bottom.bs.affix', function () {
        $(this).css({
          bottom: 'auto'
        });
      });
    }
    $('.affix-this').each(function(index,element) {
      $(this).affix({
        offset: {
          top: $(this).outerHeight() + $(this).position().top
        }
      }).on('affix.bs.affix', function () {
        $(this).css({
          top: $('#site-header').outerHeight(),
          width: $(this).outerWidth(),
          zIndex: 2
        });
      }).on('affix-bottom.bs.affix', function () {
        $(this).css({
          bottom: 'auto'
        });
      });
    });
  });
    
  function updateAffixWidth() {
    $('.affix-this').css('width', function() {
      return $(this).parent().outerWidth();
    });
  }
  /*****************
    Tabs
  *****************/
  $('.nav-tabs a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });

  /*****************
    Homepage Carousel
  *****************/
  $('.carousel').carousel({
    interval: false
  });
  realignItems(); // realign on start, in case of mobile
  function realignItems() {
    var viewportWidth =  window.innerWidth || document.documentElement.clientWidth || $(window).width();
    var container = $('.carousel-responsive');
    var itemHolder = $('.carousel-responsive .carousel-inner');
    if (viewportWidth < 768 && !itemHolder.hasClass('detached')) {
        // refactor items
        itemHolder.find('.item article').wrap("<div class='new-item'></div>");
        var articles =  itemHolder.find('.new-item').detach();
        articles.first().addClass('active');
        itemHolder.find('.item').remove();
        itemHolder.append(articles.removeClass('new-item').addClass('item'));
        itemHolder.addClass('detached');
        // reset indicators
        var indicators = container.find('.carousel-indicators').empty();
        for (var i = 0; i < articles.length; i++) {
          indicators.append('<li data-target="#'+container.prop('id')+'" data-slide-to="'+i+'"></li>');
        }
        indicators.children(":first").addClass('active');
        $('.carousel-responsive.carousel').carousel("pause").removeData();
        $('.carousel-responsive.carousel').carousel({
          interval: false
        });
        //console.log(articles);
    }
    else if (viewportWidth > 767 && itemHolder.hasClass('detached')) {
        var articles = itemHolder.find('.item article').detach();
        itemHolder.find('.item').remove();
        itemHolder.append(articles);
        for(var i = 0; i < articles.length; i+=3) {
          articles.slice(i, i+3).wrapAll('<div class="item"><div class="row"/></div>');
        }
        var items = itemHolder.find('.item');
        items.first().addClass('active');
        var indicators = container.find('.carousel-indicators').empty();
        for (var i = 0; i < items.length; i++) {
          indicators.append('<li data-target="#'+container.prop('id')+'" data-slide-to="'+i+'"></li>');
        }
        indicators.children(":first").addClass('active');
        itemHolder.removeClass('detached');
        $('.carousel-responsive.carousel').carousel("pause").removeData();
        $('.carousel-responsive.carousel').carousel({
          interval: false
        });
        //console.log(articles);
    }
    //console.log($(window).width() +" - "+ window.innerWidth);
  }
  
  /*****************
    VDP Carousel
  *****************/
  $('.thumb-carousel').carousel({
    interval: 4000
  });

  /*****************
    Thumbnail Scroller
  *****************/
  $('.thumbs-control').click(function() {
    event.preventDefault();
    //alert("hi");
    //console.log($($(this).data('target')));
    $($(this).data('target')).animate({
      scrollLeft: $(this).data('thumb') == "next" ? $(this).offset().left : 0
    },100);
  });
  $('#vdp-carousel').on('slid.bs.carousel', function (e) {
    var elem = $(this).find('.carousel-inner .item.active');
    var index = $(this).find('.carousel-inner .item').index(elem);
    $(this).find('.thumbs-container li[data-slide-to="'+index+'"]').addClass('active');
  });
  /*****************
    Slider
  *****************/
  $('.generic-slider').slider({
      formater: function(value) {
        return addCommas(value.toString());
      }
    });
  $('.generic-slider').on('slide', function(slideEvt) {
    if ($(slideEvt.target).attr('data-slider-destiny') !== 'undefined') {
       $($(slideEvt.target).attr('data-slider-destiny')).text(addCommas(slideEvt.value.toString()));
    }
  });

  function addCommas(valueAsString) {
    return valueAsString.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
  /*****************
    Result Views
  *****************/
  $('.view-button').click(function(event) {
    $(".view-button").removeClass('active');
    $(this).addClass('active');
    if ($(this).data('target') && $(this).data('view')) {
      $($(this).data('target')).removeClass (function (index, css) {
          return (css.match (/\bsearch-view-\S+/g) || []).join(' ');
      })
      .addClass($(this).data('view'));
    }
  });
  /*****************
    SRP
  *****************/
  realignSRPItems();
  function realignSRPItems() {
    var viewportWidth =  window.innerWidth || document.documentElement.clientWidth || $(window).width();
    var container = $('#search-results');
    if (viewportWidth < 768 && !container.hasClass('detached')) {
      // refactor items
      var articles =  container.find('article').detach();
      var advertising = container.find('.search-advertising').detach();
      container.find('.row').remove();
      var y = 0, z = 1;
      for (var x = 0; x < articles.length; x+=2) {
        container.append($(document.createElement('div')).addClass("row").append(articles.slice(x,x+2)));
        if (z != 0 && z%4 == 0) {
          //console.log(x+" "+y+" "+z);
          container.append(advertising.slice(y++));
        }
        z++;
      }
      container.addClass('detached');
    }
    else if (viewportWidth > 767 && container.hasClass('detached')) {
      // refactor items
      var articles =  container.find('article').detach();
      var advertising = container.find('.search-advertising').detach();
      container.find('.row').remove();
      var y = 0, z = 1;
      for (var i = 0; i < articles.length; i+=3) {
        container.append($(document.createElement('div')).addClass("row").append(articles.slice(i,i+3)));
        if (z != 0 && z%3 == 0) {
          container.append(advertising.slice(y++));
        }
        z++;
      }
      container.removeClass('detached');
    }
    //console.log($(window).width() +" - "+ window.innerWidth);
  }
  /*****************
    Express Code
  *****************/
  $('#express-form').submit(function() {
    event.preventDefault();
    if( $(this).prop('action') ) {
      var target = $(this).data('target');
      $.getJSON($(this).prop('action'), function(data, textStatus, jqXHR) {
          //data is an object.
          //console.log(data);
          for (var i = 0; i < data.length; i++) {
            var span = $(document.createElement('span')).addClass("address").text(" "+data[i].address+" ~ "+data[i].distance+" "+data[i].distance_unit).prepend('<span class="glyphicon glyphicon-map-marker"></span>');
            span = $(document.createElement('span')).addClass("dealer").text(data[i].dealer).append(span);
            var input = $(document.createElement('input')).prop({
              type: 'checkbox',
              name: 'availableDealer',
              value: data[i].dealerId
            });
            var label = $(document.createElement('label')).append(input,span);
            var divisor = $(document.createElement('div')).addClass('checkbox').append(label);
            //console.log(divisor);
            $('.json-response').append(divisor);
          }
           $(target).collapse({
            toggle: true
          });
          
      }).fail(function(jqXHR, textStatus, errorThrown) {
        //error
      });
    }
  });

  /***********************
    Shuffle Sort & Filter
  ***********************/
  var $grid = $('#model-grid'),
    //$filterOptions = $('.filter-options'),
    $sizer = $grid.find('.shuffle__sizer');//,

  // init = function() {
    // None of these need to be executed synchronously
    setTimeout( function() {
      listen();
      setupFilters();
      setupSorting();
      // setupSearching();
    }, 100);

    // instantiate the plugin
    $grid.shuffle({
      itemSelector: '.item'
      // sizer: $sizer
    });

    // Destroy it! o_O
    // $grid.shuffle('destroy');
  // },

  // Set up button clicks
  setupFilters = function() {
    var filterTypes = '',
        filterYear = '';
        
    var $btns = $('.filter-btn'); //$filterOptions.children();
    $btns.on('click', function() {
      filterYear = '';
      var $this = $(this),
          isActive = $this.hasClass( 'active' );//,
      
      if (!isActive)
        filterYear = $this.data('group');

      // Hide current label, show current label in title
      if ( !isActive ) {
        $('.filter-options .active').removeClass('active');
      }
      $this.toggleClass('active');
      
      //console.log("hola");
      // Filter elements
      //$grid.shuffle( 'shuffle', group );
      startShuffle(filterTypes,filterYear);
    });
    $btns = null;
    
    var $select = $('.filter-select'); //$filterOptions.children();
    $select.on('change', function() {
      //filterTypes = '';
        filterTypes = this.value? this.value : '';

      // Filter elements
      //$grid.shuffle( 'shuffle', group );
      startShuffle(filterTypes,filterYear);
    });
    $select = null;
    
  };//,
  function startShuffle( type,year)
  {
    //console.log (g);
    if (type.length || year.length) {
      $grid.shuffle('shuffle', function($el, shuffle) {
        //console.log(type+" "+year+" "+$el.data('groups'));
        if (type.length === 0 || year.length === 0) {
          return $el.data('groups').indexOf(type) !== -1 || $el.data('groups').indexOf(year) !== -1 ;
        }
        else
          return $el.data('groups').indexOf(type) !== -1 && $el.data('groups').indexOf(year) !== -1 ;
      });
    } else {
      $grid.shuffle( 'shuffle', 'all' );
    }
  }
  

  setupSorting = function() {
    // Sorting options
    $('.sort-options').on('change', function() {
      var sort = this.value,
          opts = {};

      // We're given the element wrapped in jQuery
      if ( sort === 'date-created' ) {
        opts = {
          reverse: true,
          by: function($el) {
            return $el.data('date-created');
          }
        };
      } else if ( sort === 'title' ) {
        opts = {
          by: function($el) {
            return $el.data('title').toLowerCase();
          }
        };
      }

      // Filter elements
      $grid.shuffle('sort', opts);
    });
  };//,

  // setupSearching = function() {
    // // Advanced filtering
    // $('.js-shuffle-search').on('keyup change', function() {
      // var val = this.value.toLowerCase();
      // $grid.shuffle('shuffle', function($el, shuffle) {

        // // Only search elements in the current group
        // if (shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('groups')) === -1) {
          // return false;
        // }

        // var text = $.trim( $el.find('.picture-item__title').text() ).toLowerCase();
        // return text.indexOf(val) !== -1;
      // });
    // });
  // };//,

  // Re layout shuffle when images load. This is only needed
  // below 768 pixels because the .picture-item height is auto and therefore
  // the height of the picture-item is dependent on the image
  // I recommend using imagesloaded to determine when an image is loaded
  // but that doesn't support IE7
  listen = function() {
    var debouncedLayout = $.throttle( 300, function() {
      $grid.shuffle('update');
    });

    // Get all images inside shuffle
    $grid.find('img').each(function() {
      var proxyImage;

      // Image already loaded
      if ( this.complete && this.naturalWidth !== undefined ) {
        return;
      }

      // If none of the checks above matched, simulate loading on detached element.
      proxyImage = new Image();
      $( proxyImage ).on('load', function() {
        $(this).off('load');
        debouncedLayout();
      });

      proxyImage.src = this.src;
    });

    // Because this method doesn't seem to be perfect.
    setTimeout(function() {
      debouncedLayout();
    }, 500);
  };
  
  
  /*****************
    Generic
  *****************/
  $(".sort-trigger").on('change',function(){
    sendSortCommand($(this));
  });
  $(".sort-button").click(function(){
    $(".sort-button").removeClass('active');
    $(this).addClass('active');
    sendSortCommand($(this));
  });
  function sendSortCommand(elem) {
    alert("you clicked on: "+elem.val());
  }
  $.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
          if (this.value)
            o[this.name] = this.value;
        }
    });
    return o;
  };
  /******* chained input *******/
  $('.chained-input').change(function() {
    if ($(this).data('next') && $(this).prop('value')) {
      $($(this).data('next')).prop('disabled', false);
    }
  });
  $('.toggle-input').change(function() {
    if ($(this).data('target') && $(this).prop('value')) {
      $($(this).data('target')).collapse({
        toggle: true
      });
    }
  });

  /*****************
    Mobile
  *****************/
  addMobileChevronToList();
  $(window).resize(function() {
    addMobileChevronToList();
    updateAffixWidth();
    realignItems();
    realignSRPItems();
  });
  $('.toggle-button').click(function() {
    $(this).toggleClass('button-on');
  });
  function addMobileChevronToList()
  {
    $(".mobile-list-chevron").remove();
    var viewportWidth =  window.innerWidth || document.documentElement.clientWidth || $(window).width();
    if (viewportWidth < 768) {
      $('#research-list .collapse').removeClass('in');
      $('.mobile-list li a').append("<span class=\"mobile-list-chevron glyphicon glyphicon-chevron-right pull-right\"></span>");
    } 
  }
});