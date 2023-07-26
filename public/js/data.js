$(document).ready(function() {
    let currentIndex = 0;
    let peopleData = [];
  
    // Function to load data from data.json
    function loadData() {
      $.getJSON('json/data.json', function(data) {
        peopleData = data;
      });
    }
  
    // Function to display a person's data
    function displayPerson(index) {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "post",
                data: { _token: csrfToken, nxt:"1",index:index },
                beforeSend: function(){

                },
                success: function(res){
                    if(res){
                        $('.content').append(res);
                    }
                },
                complete: function(){

                },
                error: function(){

                }

            });
    }
  
    // Function to handle the "Next Person" button click
    function nextPerson() {
      currentIndex++;
      if (currentIndex < peopleData.length) {
        displayPerson(currentIndex);
      } else {
        alert('No more people!');
        currentIndex = peopleData.length - 1; // To prevent going beyond the last person
      }
    }
  
    $('#nextPerson').on('click', nextPerson);
  
    // Load data on page load
    loadData();
  });
  