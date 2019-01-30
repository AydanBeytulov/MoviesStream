let api = "https://movies-stream.herokuapp.com/video";

let video = $('#video_player');
let flowVideoID = "video_player_html5_api";
let source = document.createElement('source');

let magnet = video.data("torrent-id");
let fileName = video.data("torrent-name");


$(document).ready(function(){
    $('.movie-detail-header-play-btn').click(function () {

        $.get(api+'/list', function(data) {
            if(data.length > 0)
            {
                let have = false ;
                $.each(data, function(index, obj) {

                    if(obj.hash.toLowerCase() === magnet.toLowerCase()){
                        have = true ;
                    }
                });

                if(!have){
                    $.get(api+'/add/' + magnet).done(function() {
                        updateSRC();
                    });
                }else{
                    updateSRC();
                }

            }else{
                $.get(api+'/add/' + magnet).done(function() {
                    updateSRC();
                });
            }

        });

    });
});

function updateSRC(){
    let flowVideo = $('#'+flowVideoID) ;
    source.src = api+'/stream/' + magnet + "/" + fileName;
    source.type = "video/mp4";
    flowVideo.html(source);
    flowVideo[0].load();
    afterglow.getPlayer('video_player').play();
}


function start_main_video() {


    //
    //	1.	Set the base URL
    //
    var api = "https://movies-stream.herokuapp.com/video";

    //
    //	2.	Check every second if there is a new Magnet file in the client
    //
    client_magnet_list();

    //
    //	3.	Get every second the stats of the client, not individual
    //		torrent.
    //
    check_for_client_stats();

    //
    //	4.	Check every second of there is some errors from the client
    //
    check_for_client_errors();

    function client_magnet_list()
    {
        //
        //	1.	Set a timeout that will be executed after n amount of time
        //
        setTimeout(function() {

            //
            //	1.	Make a API request to get the contents of the Client
            //
            $.get(api + '/list', function(data) {

                //
                //	1.	Clear the content of the UL
                //
                $("#magnets").empty();

                //
                //	2.	We populate the UL only if we get data from the
                //		server
                //
                if(data.length > 0)
                {
                    //
                    //	1.	Loop over the array to list all the Magnet
                    //		Hashes.
                    //
                    $.each(data, function(index, obj) {

                        $("#magnets").append('<li data-hash="' + obj.hash + '"><span class="magnet">' + obj.hash + '</span> [<span class="delete url">Delete</span>]</li>');

                    });
                }
                else
                {
                    //
                    //	1.	Display Not Available if no data is present
                    //
                    $("#magnets").append('<li>N/A</li>');
                }

                //
                //	3.	Restart the timer so we keep on checking if there
                //		are new Magnet Hashes
                //
                client_magnet_list();

            });

        }, 1000)
    }

    //
    //	Make API request every n amount of time to get the status of the
    //	client so we can get a sense if the data is being downloaded or
    //	not.
    //
    function check_for_client_stats()
    {
        //
        //	1.	Set a timeout that will be executed after n amount of time
        //
        setTimeout(function() {

            //
            //	1.	Make a request to the API for fresh data.
            //
            $.get(api + '/stats', function(obj) {

                //
                //	1.	Clear the content of the UL so we can refresh it
                //		with new content.
                //
                $("#stats").empty();

                //
                //	2.	Format the response in a meaningful way
                //
                var li = "<li>Progress: " + obj.progress + "%</li>" +
                    "<li>downloadSpeed: " + format_bytes(obj.downloadSpeed, 0) + "/s</li>" +
                    "<li>ratio: " + obj.ratio + "</li>";

                //
                //	3.	Display the stats in the UL
                //
                $("#stats").append(li);

            });

            //
            //	2.	Restart the timer so we keep on checking the status of
            //		the client.
            //
            check_for_client_stats();

        }, 1000);
    }

    //
    //	Make API request every n amount of time to see if the client has
    //	some errors worth showing.
    //
    function check_for_client_errors()
    {
        //
        //	1.	Set a timeout that will be executed after N amount of time
        //
        setTimeout(function() {

            //
            //	1.	Make a request to the server for the data
            //
            $.get(api + '/errors', function(message) {

                //
                //	1.	Display the error only if there is anything to show
                //
                if(message)
                {
                    //
                    //	1.	Clear the content of the UL
                    //
                    $("#errors").empty();

                    //
                    //	2.	Display the error
                    //
                    $("#errors").append('<li class="error">' + message + '</li>');

                }

                //
                //	2.	Restart the timer so we can update the error
                //		message if there is anything new
                //
                check_for_client_errors();

            });

        }, 1000);
    }

}

//
//	Convert bytes to a human readable form
//
function format_bytes(bytes, decimals)
{
    //
    //	If the size is 0, then we can stop right away.
    //
    if(bytes == 0)
    {
        return '0 Byte';
    }

    //
    //	Convert bytes to kilobytes
    //
    var k = 1024;

    //
    //	Set how many position after decimal to show
    //
    var dm = decimals + 1 || 3;

    //
    //	Array with all the possible formats.
    //
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

    //
    //
    //
    var i = Math.floor(Math.log(bytes) / Math.log(k));

    //
    //
    //
    return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}
