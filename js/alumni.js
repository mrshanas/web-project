const alName = document.getElementById("alname");
const enrollYear = document.getElementById("enrolYear");
const gradYear = document.getElementById("gradYear");
const headmaster = document.getElementById("headmasters");
const teachers = document.getElementById("teachers");
const schoolResults = document.getElementById("results");

const years = [2021, 2020, 2019, 2018, 2017];
const headmasters = [
  "Crisdom Ambilikile",
  "Abraham Shafuri",
  "Cristopher Segeleti",
  "Devid Adamson",
];

const famousTeachers = [
  "Michael Kaskaz",
  "Riziki Majalla",
  "Daniel Ngobito",
  "Madam Sophia",
  "Philemon Muhikwa",
  "Joslin Mwakitalima",
];

const results = ["Div I", "Div II", "Div III", "Div IV", "Div 0"];

// append elements in select tag
const appendElements = (value, element) => {
  let option = document.createElement("option");

  option.value = value;
  option.text = value;

  element.appendChild(option);
};

const checkCharacters = (value, limit) => value > limit;

years.forEach((val) => {
  appendElements(val, enrollYear);
  appendElements(val, gradYear);
});

headmasters.forEach((name) => appendElements(name, headmaster));

famousTeachers.forEach((teacher) => appendElements(teacher, teachers));

results.forEach((result) => appendElements(result, schoolResults));

// check alumnus name

alName.onchange = (e) => {
  if (checkCharacters(e.target.value, 30)) {
    alName.style.border = "1px solid red";
  } else {
    alName.style.border = "1px solid green";
  }
};
