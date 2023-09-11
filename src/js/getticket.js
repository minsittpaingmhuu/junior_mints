  //variable decleration
var orderSeatType = document.getElementById("seatType");
var orderSeatNumber = document.getElementById("seatNum");
var orderSeatTotal = document.getElementById("seatTotal");
var orderSeatPayment = document.getElementById("seatPayment");
var confirmButton =  document.querySelector("#confirmButton")
var orderButton = document.querySelector("#orderButton")
var ticketNumber = document.querySelector("#inputNumber")
var seatType = document.getElementById("type")
var paymentMethod = document.getElementById("payment");

function dnt(evt, match) 
{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) 
    {
      tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) 
    {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(match).style.display = "block";
    evt.currentTarget.className += " active";
};


var checkVoucher = ()=>{
  document.getElementById("order").style.display = "block";

  //removing red text
  orderSeatType.classList.remove("text-danger");
  orderSeatNumber.classList.remove("text-danger");
  orderSeatTotal.classList.remove("text-danger");
  orderSeatPayment.classList.remove("text-danger");

  //getting ticketNumber
  if(ticketNumber.value){
    orderSeatNumber.innerText = ticketNumber.value
  }else{
    orderSeatNumber.innerText = "Please Select Ticket Number !!";
    orderSeatNumber.classList.add("text-danger");
  }

  //getting seat type
  switch(seatType.value){
    case "1": 
      orderSeatType.innerText = "VIP Seat"
      document.getElementById("total").innerText = "20000";
      var total = getTotal(parseInt(ticketNumber.value),20000);
      break;
    case "2":
      orderSeatType.innerText = "Regular Seat"
      document.getElementById("total").innerText = "15000";
      var total = getTotal(parseInt(ticketNumber.value),15000);
      break;

    default:
      orderSeatType.innerText = "Please Select a seat Type !!";
      orderSeatType.classList.add("text-danger");
      break;
  }

  //getting payment method
  switch(paymentMethod.value){
    case "0":
      orderSeatPayment.innerText = "Cash on Deli"
      return setTotal(total);
    case "1":
      orderSeatPayment.innerText = "Wave Pay"
      return setTotal(total);
    case "2":
      orderSeatPayment.innerText = "KBZ Pay"
      return setTotal(total);
    case "3":
      orderSeatPayment.innerText = "Take in"
      return setTotal(total)
    default:
      orderSeatPayment.innerText = "Please Select a seat Type !!";
      orderSeatPayment.classList.add("text-danger");
      break;

  }

}


//when order requirments match it'll show submit
var orderConfirm = ()=>{
  document.querySelector("#submitButton").style.display = "block";
  confirmButton.style.display = "none";
  orderButton.style.display = "none";
}


//ask to confirm his data
var confirmVoucher = _=>{
  var ok=checkVoucher();
  if(ok==1){
    orderConfirm();
  }

}



//getting total
var getTotal = (Quant, Price)=>{
    return Quant * Price;
}

//setting total in table
var setTotal = total =>{
  if(total){
    orderSeatTotal.innerText = total;
    return 1;
  }else{
    orderSeatTotal.innerText = "0";
  }
}