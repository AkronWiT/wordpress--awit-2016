function updateContent() {

  // Meetup Event 
  jQuery.ajax({
    type: 'GET',
    url: 'https://api.meetup.com/2/events?offset=0&format=json&limited_events=False&group_urlname=Akron-Women-In-Tech&page=500&fields=&order=time&desc=false&status=upcoming&sig_id=9315377&sig=779a67672c5292801fec0bea01799d54dce9aaf4',
    dataType: 'jsonp',
    success: function(data, status, request) {

      var nextEventDesc = data.results[0].description,
          nextEventDescLength = nextEventDesc.length, 
          nextEventExcerptLength = 500,
          nextEventExcerpt = nextEventDesc.substring(0, nextEventExcerptLength);

      if (status == 'success') {
        // SET NEXT EVENT TITLE
        jQuery('.js-current-title', '#nextEvent').text(data.results[0].name);
        // SET NEXT EVENT  URL
        jQuery('.js-current-url', '#nextEvent').attr('href', data.results[0].event_url);
        // SET NEXT EVENT DESCRIPTION
        if ( nextEventDescLength < nextEventExcerptLength ) {
          jQuery('.js-current-desc', '#nextEvent').html(nextEventExcerpt);
        } else {
          jQuery('.js-current-desc', '#nextEvent').html(nextEventExcerpt + '...');
        }

        // SET UPCOMMING EVENT 1 TITLE AND URL
        jQuery('.js-next-link-1', '#upcommingEvent').text(data.results[1].name).attr('href', data.results[1].event_url);

        // SET UPCOMMING EVENT 2 TITLE AND URL
        jQuery('.js-next-link-2', '#upcommingEvent').text(data.results[2].name).attr('href', data.results[2].event_url);

        // SET UPCOMMING EVENT 3 TITLE AND URL
        jQuery('.js-next-link-3', '#upcommingEvent').text(data.results[3].name).attr('href', data.results[3].event_url);

        // SET UPCOMMING EVENT 4 TITLE AND URL
        jQuery('.js-next-link-4', '#upcommingEvent').text(data.results[4].name).attr('href', data.results[4].event_url);

      }

    }
  });

}