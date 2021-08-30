function text2clipboard(text)
{
    navigator.clipboard.writeText(text);

    alert("Copied '" + text + "' into your clipboard.");
}

function ip2clipboard()
{
    var ipaddress = "gann4mc.ga";
    text2clipboard(ipaddress);
}