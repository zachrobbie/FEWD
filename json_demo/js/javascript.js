$(document).ready(do_setup);

function do_setup() {
    $('#do_stuff').click(get_ajax_data);
}

//above here runs on load
//below here waits to be called!


function get_ajax_data (){
$.getJSON('http://www.w3schools.com/website/customers_mysql.php')
.done(make_html_table).fail(failed_big_time);
}

function failed_big_time (){
    $('#data').html('oh no i broke...');
}

function make_html_table(data) {
    console.log(data);
    var html_string = '<table>';
    html_string += '<tr><th>Name</th><th>City</th><th>Country</th></tr>';
    
    for(var counter = 0; counter < data.length; counter++ )
    {html_string += '<tr>'; 
     
     html_string += '<td>';
     html_string += data[counter].Name;
     html_string += '</td>';
     
     html_string += '<td>';
     html_string += data[counter].City;
     html_string += '</td>';
     
     html_string += '<td>';
     html_string += data[counter].Country;
     html_string += '</td>';
     
     html_string += '</tr>';
    
    
    }
    
    html_string += '</table>';

    $('#data').html(html_string);
}
