var counterElement = document.getElementById("home_viewcount");


function UpdateViewCount()
{
    fetch("https://api.countapi.xyz/update/gann4life/home_viewcount?amount=1")
    .then(result => result.json())
    .then(result => 
        {
            counterElement.innerHTML = "Page views: " + result.value;
        });
    }
    
UpdateViewCount();