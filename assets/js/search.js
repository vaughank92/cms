/**
 * Created by katievaughan on 7/29/14.
 */
function displayResult()
{
    var x;
    if(window.event)
    {
        x=event.keyCode;
    }
    else if(event.which)
    {
        x = event.which;
    }
    keychar = String.fromCharCode(x);
    alert("Key " + keychar + " was pressed down");
}