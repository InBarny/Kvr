const Orders = [
  {
    productName: "JavaScript Tutorial",
    productNumber: "85743",
    paymentStatus: "Due",
    status: "Pending",
  },
  {
    productName: "CSS Full Course",
    productNumber: "97245",
    paymentStatus: "Refunded",
    status: "Declined",
  },
  {
    productName: "Flex-Box Tutorial",
    productNumber: "36452",
    paymentStatus: "Paid",
    status: "Active",
  },
];

var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function () {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
