function showPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}
function goBack() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}

function showForm() {
  var courseForm = document.getElementById("courseForm");
  courseForm.style.display = "block";
}
function cancelForm() {
  var courseForm = document.getElementById("courseForm");
  courseForm.style.display = "none";
}
function showCourse() {
  var editCourse = document.getElementById("editCourse");
  editCourse.style.display = "block";
}

function cancelCourse() {
  var editCourse = document.getElementById("editCourse");
  editCourse.style.display = "none";
}

function showList() {
  var list = document.getElementById("List");
  list.style.display = "block";
}

function cancelList() {
  var list = document.getElementById("List");
  list.style.display = "none";
}

function showTable(tableId) {
  var tables = document.querySelectorAll(".results table");
  tables.forEach(function (table) {
    if (table.id === tableId) {
      table.style.display = "table";
    } else {
      table.style.display = "none";
    }
  });
}
