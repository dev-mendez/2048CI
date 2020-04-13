$(document).ready(function () {
var settings = {
  "url": "https://covidapi.info/api/v1/country/CUB",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
        var date = new Date();
        console.log();
        console.log(response.result[date.getDate() + "/" + (date.getMonth() +1) + "/" + date.getFullYear()].confirmed);
  
});
	    $.get("home/getRecords", function (data) {
        var obj = JSON.parse(data);
        $.each(obj, function (i, items) {
            if (i == 0) {
                                $('#tableRecords').append(

                    '<tr class="bg-warning text-dark">' +
                    '<td>' + (i+1) + '</td>' +
                    '<td>' + items.nickname + '</td>' +
                    '<td>' + items.record + '</td>' +
                    '<td>' + items.intents + '</td>' 
                    +'</tr>'
                );
            } else {
                                $('#tableRecords').append(

                    '<tr class="bg-dark text-light">' +
                    '<td>' + (i+1) + '</td>' +
                    '<td>' + items.nickname + '</td>' +
                    '<td>' + items.record + '</td>' +
                    '<td>' + items.intents + '</td>' 
                    +'</tr>'
                );
            }

    
        })
        $("#tableRecords").DataTable();
    })

});