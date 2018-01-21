/**
 * 
 */

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
	

	
//codes for accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

var acc = document.getElementByClassName("accordion2");
var i;
for (i = 0; i < acc.length; i++) {
acc[i].onclick = function() {
  this.classList.toggle("active");
  var panel1 = this.nextElementSibling;
  if (panel1.style.maxHeight){
    panel1.style.maxHeight = null;
  } else {
    panel1.style.maxHeight = panel1.scrollHeight + "px";
    }
  }
}
	
	
	
	
// codes for edit button
document.getElementById('edit-btn').addEventListener('click', function () {
	document.getElementById('edit-txt').classList.add('active');
});

    

// codes for save button
function change()
{
    document.getElementById("edit-btn").value="Save";
    document.getElementById("edit-btn").id="save-btn";
}


  
// codes for tabcontent, tablinks and tablinks1
// also for defaultOpen
function openMenu(evt, menuName) {
	var i, tabcontent, tablinks, tablinks1;
	tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    tablinks1 = document.getElementsByClassName("tablinks1");
    for (i = 0; i < tablinks1.length; i++) {
        tablinks1[i].className = tablinks1[i].className.replace(" active", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.className += " active";
}
	
	
	
  
function name_change()
{
    document.getElementById("name").id="name1";
    document.getElementById("edit-name").id="edit-name1";
    document.getElementById("edit-name-btn").id="edit-name-btn1";
}

function name_main()
{
    document.getElementById("name1").id="name";
    document.getElementById("edit-name1").id="edit-name";
    document.getElementById("edit-name-btn1").id="edit-name-btn";
}

function email_change()
{
    document.getElementById("email").id="email1";
    document.getElementById("edit-email").id="edit-email1";
    document.getElementById("edit-email-btn").id="edit-email-btn1";
}

function email_main()
{
    document.getElementById("email1").id="email";
    document.getElementById("edit-email1").id="edit-email";
    document.getElementById("edit-email-btn1").id="edit-email-btn";
}

function phone_change()
{
    document.getElementById("phone").id="phone1";
    document.getElementById("edit-phone").id="edit-phone1";
    document.getElementById("edit-phone-btn").id="edit-phone-btn1";
}

function phone_main()
{
    document.getElementById("phone1").id="phone";
    document.getElementById("edit-phone1").id="edit-phone";
    document.getElementById("edit-phone-btn1").id="edit-phone-btn";
}

function dob_change()
{
    document.getElementById("dob").id="dob1";
    document.getElementById("edit-dob").id="edit-dob1";
    document.getElementById("edit-dob-btn").id="edit-dob-btn1";
}

function dob_main()
{
    document.getElementById("dob1").id="dob";
    document.getElementById("edit-dob1").id="edit-dob";
    document.getElementById("edit-dob-btn1").id="edit-dob-btn";
}

function company_change()
{
    document.getElementById("company").id="company1";
    document.getElementById("edit-company").id="edit-company1";
    document.getElementById("edit-company-btn").id="edit-company-btn1";
}

function company_main()
{
    document.getElementById("company1").id="company";
    document.getElementById("edit-company1").id="edit-company";
    document.getElementById("edit-company-btn1").id="edit-company-btn";
}

function address_change()
{
    document.getElementById("address").id="address1";
    document.getElementById("edit-address").id="edit-address1";
    document.getElementById("edit-address-btn").id="edit-address-btn1";
}

function address_main()
{
    document.getElementById("address1").id="address";
    document.getElementById("edit-address1").id="edit-address";
    document.getElementById("edit-address-btn1").id="edit-address-btn";
}
  
  