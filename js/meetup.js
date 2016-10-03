function updateContent() {

  // Member Count
  jQuery.ajax({
    type: 'GET',
    url: 'https://api.meetup.com/2/groups?offset=0&format=json&group_urlname=Akron-Women-In-Tech&only=members&callback=jQuery1113014036352676339447_1436571834493&photo-host=public&page=20&radius=25.0&fields=&order=id&desc=false&_=1436571834494&sig_id=45621862&sig=193eedf432bb623f60d8a47ece16bca89d4abcdd',
    dataType: 'jsonp',
    success: function(data, status, request) {
      jQuery('#members').html(data.results[0].members);
    }
  });

  // Event Count
  jQuery.ajax({
    type: 'GET',
    url: 'https://api.meetup.com/2/events?offset=0&format=json&limited_events=False&group_urlname=Akron-Women-In-Tech&photo-host=public&page=20&fields=&order=time&status=past%2Cupcoming&desc=false&sig_id=45621862&sig=994063bada2de80f9daac68a008e9ff5899f9b51',
    dataType: 'jsonp',
    success: function(data, status, request) {
      jQuery('#events').html(data.meta.total_count);
    }
  });
}
