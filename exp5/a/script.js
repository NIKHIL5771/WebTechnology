const addRowBtn = document.getElementById("add-row-btn");
const studentTable = document.getElementById("student-table");

addRowBtn.addEventListener("click", function () {
    const row = studentTable.insertRow(-1);
    const serialNumberCell = row.insertCell(0);
    const nameCell = row.insertCell(1);
    const rollNumberCell = row.insertCell(2);
    const totalMarksCell = row.insertCell(3);

    serialNumberCell.innerHTML = "5";
    nameCell.innerHTML = "Lavanya";
    rollNumberCell.innerHTML = "005";
    totalMarksCell.innerHTML = "100";
});
