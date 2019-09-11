function updateContent() {

  // Meetup Event 
  jQuery.ajax({
    type: 'GET',
    url: 'https://api.meetup.com/Akron-Women-In-Tech/events?page=5',
    jsonp: "callback",
    dataType: 'jsonp',
    success: function(data, status, request) {
      if (status == 'success') {
        if(data.data == null || data.data.length == 0){
          jQuery('.js-current-title', '#nextEvent').text("No Events Currently Scheduled, Check Back Soon!");
        }
        else{
          var nextEventDesc = data.data[0].description,
          nextEventDescLength = nextEventDesc.length, 
          nextEventExcerptLength = 500,
          nextEventExcerpt = nextEventDesc.substring(0, nextEventExcerptLength);

          // SET NEXT EVENT TITLE
          jQuery('.js-current-title', '#nextEvent').text(data.data[0].name);
          // SET NEXT EVENT  URL
          jQuery('.js-current-url', '#nextEvent').attr('href', data.data[0].link);
          // SET NEXT EVENT DESCRIPTION
          if ( nextEventDescLength < nextEventExcerptLength ) {
            jQuery('.js-current-desc', '#nextEvent').html(nextEventExcerpt);
          } else {
            jQuery('.js-current-desc', '#nextEvent').html(nextEventExcerpt + '...');
          }

          for(i = 1; i< data.data.length; i++){
            //add new event elements to the page
            var item = '<li class="events--event"><a href="' + data.data[i].link + '" target="_blank" class="js-next-link-1">' + data.data[i].name + '</a></li>';
            jQuery('#upcommingEvent ul').append(item);
          }
        }
            
        }
      }
  
  });

}