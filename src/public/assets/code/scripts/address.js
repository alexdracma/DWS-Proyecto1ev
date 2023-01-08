//setup before functions
let typingTimer;                //timer identifier
let doneTypingInterval = 200;  //time in ms
const apiKey = 'a2a3a1c5-4404-4a9e-9c42-8631475de8d5';

//creation of the searcheable select
const select = document.getElementById('mainAddress')
let ts = new TomSelect( select , {
    create: false,
    persist: false,
    sortField: {
        field: "text",
        direction: "asc"
    },
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
})

let input = document.getElementById('mainAddress-ts-control');

//on keyup, start the countdown
input.addEventListener('keyup', function () {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
})

//on keydown, clear the countdown
input.addEventListener('keydown', function () {
    clearTimeout(typingTimer);
})

//user is "finished typing," do something
function doneTyping () {
    let query = input.value;
    if (query) {
        //only searches results in spain
        fetch('https://api.mymappi.com/v2/places/autocomplete?apikey=' + apiKey + '&q=' + query + '&auto_focus=true&country_code=ESP')
            .then(response => response.json())
            .then(json => {
                select.innerHTML = '<option></option>'
                ts.clearOptions();
                for (let index = 0; index < json.data.length; index++) {
                    ts.addOption({
                        id: index + 1,
                        title: json.data[index].display_name
                    })
                }
                ts.refreshOptions()
            });
    }
}