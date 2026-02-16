// // AUTH
// function login() {
//   if (username.value === "admin" && password.value === "1234") {
//     localStorage.setItem("admin", "true");
//     location.href = "admin-dashboard.html";
//   } else alert("Wrong credentials");
// }

// function logout() {
//   localStorage.removeItem("admin");
//   location.href = "admin-login.html";
// }

// if (location.pathname.includes("dashboard") && !localStorage.getItem("admin")) {
//   location.href = "admin-login.html";
// }

// // DATA
// let trainers = JSON.parse(localStorage.getItem("trainers")) || [];
// let plans = JSON.parse(localStorage.getItem("plans")) || [];
// let classes = JSON.parse(localStorage.getItem("classes")) || [];

// // ADD
// function addTrainer() {
//   trainers.push({name:trainerName.value,skill:trainerSkill.value});
//   save();
// }
// function addPlan() {
//   plans.push({name:planName.value,price:+planPrice.value});
//   save();
// }
// function addClass() {
//   classes.push({
//     name:className.value,
//     trainer:classTrainer.value,
//     day:classDay.value,
//     time:classTime.value
//   });
//   save();
// }

// // SAVE & RENDER
// function save() {
//   localStorage.setItem("trainers",JSON.stringify(trainers));
//   localStorage.setItem("plans",JSON.stringify(plans));
//   localStorage.setItem("classes",JSON.stringify(classes));
//   render();
// }

// function render() {
//   trainerList.innerHTML = trainers.map(t=>`<li>${t.name} (${t.skill})</li>`).join("");
//   planList.innerHTML = plans.map(p=>`<li>${p.name} - $${p.price}</li>`).join("");
//   classList.innerHTML = classes.map(c=>`<li>${c.name} | ${c.day}</li>`).join("");

//   membersCount.textContent = plans.length * 10;
//   classesCount.textContent = classes.length;

//   let monthly = plans.reduce((s,p)=>s+p.price,0);
//   monthlyIncome.textContent = monthly;
//   annualIncome.textContent = monthly * 12;
// }

// if (location.pathname.includes("dashboard")) render();
