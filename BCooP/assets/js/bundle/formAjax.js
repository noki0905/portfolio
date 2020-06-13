jQuery.ajax({
  url: "https://docs.google.com/forms/u/2/d/e/1FAIpQLSe134U_EOmlh4Gh5_rujKOwkj4gkolubfK-4xUUiKT0kqy06g/formResponse",
  data: {"entry.449571119": name, "entry.449571119": name, "entry.151776941": name},
  type: "POST",
  dataType: "xml",
  statusCode: {
    0: function() {
      //Success message
      document.getElementById("message").innerHTML = "Your form has been submitted. Thank you!!";
      console.log("Success");
      window.location.replace("ThankYou.html");
    },
    200: function() {
      //Success Message
      document.getElementById("message").innerHTML = "Something went wrong. NOT been submitted! Try again";
    }
  }
})