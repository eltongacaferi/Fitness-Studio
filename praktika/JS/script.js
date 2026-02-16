// ====== DATA ======
const classesData = [
  { id: "c1", name: "Morning Yoga Flow", type: "Yoga", description: "Start your day with energizing yoga poses and breathing exercises", trainer: "Sarah Johnson", day: "Monday", time: "7:00 AM - 8:00 AM", capacity: 20, booked: 0 },
  { id: "c2", name: "HIIT Blast", type: "HIIT", description: "High-intensity interval training for maximum calorie burn", trainer: "Mike Chen", day: "Monday", time: "6:00 PM - 7:00 PM", capacity: 15, booked: 0 },
  { id: "c3", name: "Strength & Power", type: "Strength", description: "Build muscle and increase strength with compound movements", trainer: "David Martinez", day: "Tuesday", time: "5:30 PM - 6:30 PM", capacity: 12, booked: 0 },
  { id: "c4", name: "Cardio Kickboxing", type: "Cardio", description: "Fun and energetic kickboxing workout", trainer: "Emma Williams", day: "Wednesday", time: "6:00 PM - 7:00 PM", capacity: 18, booked: 0 },
  { id: "c5", name: "Pilates Core", type: "Pilates", description: "Strengthen your core and improve flexibility", trainer: "Sarah Johnson", day: "Thursday", time: "9:00 AM - 10:00 AM", capacity: 15, booked: 0 },
  { id: "c6", name: "Evening Yoga", type: "Yoga", description: "Relaxing evening yoga to unwind from your day", trainer: "Sarah Johnson", day: "Friday", time: "7:00 PM - 8:00 PM", capacity: 20, booked: 0 },
  { id: "c7", name: "Weekend HIIT", type: "HIIT", description: "Intense weekend workout to boost your metabolism", trainer: "Mike Chen", day: "Saturday", time: "10:00 AM - 11:00 AM", capacity: 15, booked: 0 },
  { id: "c8", name: "Total Body Strength", type: "Strength", description: "Full body strength training for all fitness levels", trainer: "David Martinez", day: "Saturday", time: "2:00 PM - 3:00 PM", capacity: 12, booked: 0 },
];

const trainersData = [
  { name: "Sarah Johnson", photo: "../FOTOT/sarah.jpg", specializations: ["Yoga", "Pilates", "Flexibility"], bio: "Certified yoga instructor with 8+ years of experience helping clients find balance and strength", schedule: "Mon, Thu, Fri", classes: ["Morning Yoga Flow", "Pilates Core", "Evening Yoga"] },
  { name: "Mike Chen", photo: "../FOTOT/mike.jpg", specializations: ["HIIT", "Cardio", "Weight Loss"], bio: "High-energy trainer specializing in intense workouts that deliver fast results", schedule: "Mon, Tue, Sat", classes: ["HIIT Blast", "Weekend HIIT"] },
  { name: "Emma Williams", photo: "../FOTOT/emma.jpg", specializations: ["Cardio", "Boxing", "Group Fitness"], bio: "Former competitive athlete bringing fun and intensity to every class", schedule: "Wed, Thu, Sun", classes: ["Cardio Kickboxing"] },
  { name: "David Martinez", photo: "../FOTOT/david.jpg", specializations: ["Strength", "Powerlifting", "Sports Performance"], bio: "Strength coach focused on building functional fitness and athletic performance", schedule: "Tue, Sat, Sun", classes: ["Strength & Power", "Total Body Strength"] },
];

// ====== STORAGE ======
let userBookings = JSON.parse(localStorage.getItem("userBookings") || "[]");

function saveBookings() {
  localStorage.setItem("userBookings", JSON.stringify(userBookings));
}

// ====== TOAST ======
function showToast(message) {
  let toast = document.getElementById("success-toast");
  if (!toast) {
    toast = document.createElement("div");
    toast.id = "success-toast";
    toast.style = "position:fixed;bottom:20px;left:50%;transform:translateX(-50%);background:#6366f1;color:#fff;padding:1rem 2rem;border-radius:8px;z-index:9999;display:none;";
    document.body.appendChild(toast);
  }
  toast.textContent = message;
  toast.style.display = "block";
  setTimeout(() => { toast.style.display = "none"; }, 3000);
}

// ====== SCHEDULE PAGE ======
let selectedClass = null;

function renderClasses() {
  const container = document.getElementById("classes-container");
  if (!container) return;

  const filterType = document.getElementById("filter-type")?.value || "";
  const filterTrainer = document.getElementById("filter-trainer")?.value || "";
  const filterDay = document.getElementById("filter-day")?.value || "";

  container.innerHTML = classesData.filter(cls => {
    if (filterType && cls.type !== filterType) return false;
    if (filterTrainer && cls.trainer !== filterTrainer) return false;
    if (filterDay && cls.day !== filterDay) return false;
    return true;
  }).map(cls => {
    const bookedCount = userBookings.filter(b => b.class_id === cls.id && b.status === "active").length;
    const available = cls.capacity - bookedCount;
    const availableClass = available > 0 ? "badge-success" : "badge-warning";
    const availableText = available > 0 ? `${available} spots left` : "Full";
    return `
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">${cls.name}</h3>
          <p class="card-subtitle">${cls.type}</p>
        </div>
        <div class="card-body">
          <p>${cls.description}</p>
          <div class="card-meta">
            <div class="meta-item">👤 ${cls.trainer}</div>
            <div class="meta-item">📅 ${cls.day}</div>
            <div class="meta-item">🕐 ${cls.time}</div>
          </div>
          <div style="margin-top:1rem;">
            <span class="badge badge-info">${cls.capacity} capacity</span>
            <span class="badge ${availableClass}">${availableText}</span>
          </div>
        </div>
        <button class="btn btn-primary btn-full" onclick="openBookingModal('${cls.id}')" ${available === 0 ? "disabled" : ""}>
          ${available > 0 ? "Book Now" : "Fully Booked"}
        </button>
      </div>
    `;
  }).join("");
}

function openBookingModal(classId) {
  const cls = classesData.find(c => c.id === classId);
  if (!cls) return;

  const bookedCount = userBookings.filter(b => b.class_id === cls.id && b.status === "active").length;
  const available = cls.capacity - bookedCount;
  if (available === 0) { showToast("This class is fully booked"); return; }

  selectedClass = cls;
  document.getElementById("booking-class-name").textContent = cls.name;
  document.getElementById("booking-class-time").textContent = cls.time;
  document.getElementById("booking-trainer-name").textContent = cls.trainer;
  document.getElementById("booking-modal").classList.add("active");
}

function closeModal(modalId) {
  document.getElementById(modalId).classList.remove("active");
}

function submitBooking(event) {
  event.preventDefault();
  if (!selectedClass) return;

  const userName = document.getElementById("user-name").value;
  const userEmail = document.getElementById("user-email").value;

  const booking = {
    id: `booking_${Date.now()}`,
    user_name: userName,
    user_email: userEmail,
    class_id: selectedClass.id,
    class_name: selectedClass.name,
    trainer_name: selectedClass.trainer,
    class_time: `${selectedClass.day} ${selectedClass.time}`,
    status: "active",
  };

  userBookings.push(booking);
  saveBookings();
  showToast("Booking confirmed successfully!");
  document.getElementById("booking-form").reset();
  closeModal("booking-modal");
  renderClasses(); // refresh availability
}

// ====== DASHBOARD PAGE ======
function renderDashboard() {
  const active = userBookings.filter(b => b.status === "active");
  const past = userBookings.filter(b => b.status === "completed");

  document.getElementById("active-bookings-count").textContent = active.length;
  document.getElementById("completed-classes-count").textContent = past.length;

  const upcoming = document.getElementById("upcoming-bookings");
  if (upcoming) {
    upcoming.innerHTML = active.length ? active.map(b => `
      <li class="booking-item">
        <div class="booking-info">
          <h4>${b.class_name}</h4>
          <p>📅 ${b.class_time} • 👤 ${b.trainer_name}</p>
        </div>
        <button class="btn btn-secondary" onclick="cancelBooking('${b.id}')">Cancel</button>
      </li>
    `).join("") : '<p style="color:#6b7280;text-align:center;">No upcoming bookings</p>';
  }

  const pastEl = document.getElementById("past-bookings");
  if (pastEl) {
    pastEl.innerHTML = past.length ? past.map(b => `
      <li class="booking-item">
        <div class="booking-info">
          <h4>${b.class_name}</h4>
          <p>📅 ${b.class_time} • 👤 ${b.trainer_name}</p>
        </div>
        <span class="badge badge-success">Completed</span>
      </li>
    `).join("") : '<p style="color:#6b7280;text-align:center;">No past classes</p>';
  }
}

function cancelBooking(id) {
  const booking = userBookings.find(b => b.id === id);
  if (!booking) return;
  booking.status = "completed";
  saveBookings();
  renderDashboard();
  renderClasses();
  showToast("Booking cancelled");
}

// ====== TRAINERS PAGE ======
function renderTrainers() {
  const container = document.getElementById("trainers-container");
  if (!container) return;

  container.innerHTML = trainersData.map(trainer => `
    <div class="card trainer-card">
      <div class="trainer-photo">
        <img src="${trainer.photo}" alt="${trainer.name}" style="width:100%;height:100%;border-radius:50%;" />
      </div>
      <h3 class="card-title">${trainer.name}</h3>
      <div class="specializations">
        ${trainer.specializations.map(s => `<span class="badge badge-info">${s}</span>`).join("")}
      </div>
      <p style="margin:1rem 0;">${trainer.bio}</p>
      <div style="margin:1.5rem 0;">
        <strong style="color:#1f2937;">Availability:</strong>
        <p style="margin:0.5rem 0 0 0; color:#6b7280;">${trainer.schedule}</p>
      </div>
      <div>
        <strong style="color:#1f2937;">Classes:</strong>
        <ul style="margin:0.5rem 0 0 0; padding-left:1.5rem; color:#6b7280;">
          ${trainer.classes.map(cls => `<li>${cls}</li>`).join("")}
        </ul>
      </div>
    </div>
  `).join("");
}

// ====== INIT ======
document.addEventListener("DOMContentLoaded", () => {
  renderClasses();
  renderDashboard();
  renderTrainers();

  // Filters
  document.getElementById("filter-type")?.addEventListener("change", renderClasses);
  document.getElementById("filter-trainer")?.addEventListener("change", renderClasses);
  document.getElementById("filter-day")?.addEventListener("change", renderClasses);

  // Modal close
  document.querySelectorAll(".modal-close").forEach(btn => {
    btn.addEventListener("click", () => closeModal(btn.closest(".modal").id));
  });
  document.querySelectorAll(".modal").forEach(modal => {
    modal.addEventListener("click", e => { if(e.target === modal) closeModal(modal.id); });
  });

  // Booking form
  document.getElementById("booking-form")?.addEventListener("submit", submitBooking);
});

// Make functions global for inline onclick
window.openBookingModal = openBookingModal;
window.closeModal = closeModal;
window.submitBooking = submitBooking;
window.cancelBooking = cancelBooking;
