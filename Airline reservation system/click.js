

$(".btnedit").click( e =>{

let textvalues=displayData(e);
let id=$("input[name*='Flight_ID']");
let flightname=$("input[name*='Flight_name']");
let seats=$("input[name*='Seats']");
id.val(textvalues[0]);
flightname.val(textvalues[1]);
seats.val(textvalues[2]);

});

function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
      if(value.dataset.id==e.target.dataset.id){
        console.log(e.target.dataset.id);
        textvalues[id++]=value.textContent;
      }
      }
      return textvalues;
    }
    $(".traveledit").click( e =>{

    let textvalues=displaydata(e);
    let id=$("input[name*='T_ID']");
    let arrival=$("input[name*='Arrival']");
    let departure=$("input[name*='Departure']");
    id.val(textvalues[0]);
    arrival.val(textvalues[1]);
    departure.val(textvalues[2]);

    });
    function displaydata(e) {
        let id = 0;
        const td = $("#tbody tr td");
        let textvalues = [];

        for (const value of td){
          if(value.dataset.id==e.target.dataset.id){
            console.log(e.target.dataset.id);
            textvalues[id++]=value.textContent;
          }
          }
          return textvalues;
        }
