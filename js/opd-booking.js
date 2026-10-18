/* ==========================================================
                    OPD BOOKING JS
========================================================== */

/* ==========================================================
                    ELEMENTS
========================================================== */

const overlay = document.getElementById("modalOverlay");
const confirmModal = document.getElementById("confirmModal");
const successModal = document.getElementById("successModal");
const timeDisplay = document.getElementById("selectedTimeDisplay");
const toast = document.getElementById("toast");

const selectedDateElements = document.querySelectorAll("[data-selected-date]");
const selectedDateLabel = document.getElementById("selectedDateLabel");
const appointmentDateInput = document.getElementById("appointmentDateInput");
const previousDateButton = document.getElementById("previousDateButton");
const nextDateButton = document.getElementById("nextDateButton");

const bookingDetailsModal = document.getElementById("bookingDetailsModal");
const bookingTime = document.getElementById("bookingTime");
const bookingStatus = document.getElementById("bookingStatus");

/* ==========================================================
                    SHIFTS DATA (FALLBACK)
========================================================== */

const defaultShiftsData = [
    {
        id: 1,
        booking_time: "10:00 – 13:00",
        status: "Booking Open",
        status_type: "open"
    },
    {
        id: 2,
        booking_time: "10:00 – 13:30 – On dates 23/07/2026, 24/07/2026...",
        status: "Booking Closed",
        status_type: "closed"
    },
    {
        id: 3,
        booking_time: "24 Hours – All day",
        status: "Booking Full",
        status_type: "full"
    },
    {
        id: 4,
        booking_time: "10:00 – 13:30 – All day",
        status: "Booking Open",
        status_type: "open"
    }
];

/* ==========================================================
                    DATE CONFIGURATION
========================================================== */

const startingDate = new Date(2026, 4, 17);
let selectedDate = new Date(startingDate);

function formatDisplayDate(date) {
    return date.toLocaleDateString("en-GB", {
        day: "numeric",
        month: "long",
        year: "numeric"
    });
}

function formatInputDate(date) {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, "0");
    const day = String(date.getDate()).padStart(2, "0");
    return `${year}-${month}-${day}`;
}

function isSameDate(firstDate, secondDate) {
    return (
        firstDate.getFullYear() === secondDate.getFullYear() &&
        firstDate.getMonth() === secondDate.getMonth() &&
        firstDate.getDate() === secondDate.getDate()
    );
}

function setSelectedDate(date) {
    selectedDate = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    selectedDateElements.forEach(function (element) {
        element.innerText = formatDisplayDate(selectedDate);
    });

    if (selectedDateLabel) {
        selectedDateLabel.innerText = isSameDate(selectedDate, startingDate)
            ? "Today"
            : "Selected Date";
    }

    if (appointmentDateInput) {
        appointmentDateInput.value = formatInputDate(selectedDate);
    }
}

function moveSelectedDate(dayOffset) {
    const nextDate = new Date(selectedDate);
    nextDate.setDate(nextDate.getDate() + dayOffset);
    setSelectedDate(nextDate);
}

if (previousDateButton) {
    previousDateButton.addEventListener("click", function () {
        moveSelectedDate(-1);
    });
}

if (nextDateButton) {
    nextDateButton.addEventListener("click", function () {
        moveSelectedDate(1);
    });
}

if (appointmentDateInput) {
    appointmentDateInput.addEventListener("change", function (event) {
        if (!event.target.value) return;
        setSelectedDate(new Date(`${event.target.value}T00:00:00`));
    });

    appointmentDateInput.addEventListener("click", function () {
        try {
            if (typeof appointmentDateInput.showPicker === "function") {
                appointmentDateInput.showPicker();
            }
        } catch (error) {
            console.error(error);
        }
    });
}

// Initialize date
setSelectedDate(selectedDate);

/* ==========================================================
                    SHIFT DROPDOWN & ACCORDION
========================================================== */

function handleShiftSelect(shiftId) {
    document.querySelectorAll(".shift-wrapper").forEach(function (wrapper) {
        wrapper.classList.add("hidden");
    });

    const targetContainer = document.getElementById("shift-container-" + shiftId);
    if (targetContainer) {
        targetContainer.classList.remove("hidden");

        const targetDetails = document.getElementById("shift" + shiftId);
        const targetIcon = document.getElementById("icon-shift" + shiftId);

        if (targetDetails) {
            targetDetails.classList.remove("hidden");
        }
        if (targetIcon) {
            targetIcon.innerText = "expand_less";
        }
    }
}

function toggleShift(id) {
    const section = document.getElementById(id);
    const icon = document.getElementById("icon-" + id);

    if (!section || !icon) return;

    section.classList.toggle("hidden");

    if (section.classList.contains("hidden")) {
        icon.innerText = "expand_more";
    } else {
        icon.innerText = "expand_less";
    }
}

/* ==========================================================
                    BOOKING DETAILS MODAL
========================================================== */

function openBookingDetails(shiftId) {
    const sourceData = window.shiftsData || defaultShiftsData;
    const shift = sourceData.find(function (s) {
        return Number(s.id) === Number(shiftId);
    });

    if (!shift || !bookingDetailsModal) return;

    if (bookingTime) {
        bookingTime.textContent = shift.booking_time || "";
    }

    if (bookingStatus) {
        bookingStatus.textContent = shift.status || "";

        let statusColor = "text-emerald-600";
        if (shift.status_type === "closed") {
            statusColor = "text-red-600";
        } else if (shift.status_type === "full") {
            statusColor = "text-slate-600";
        }

        bookingStatus.className = "font-semibold " + statusColor;
    }

    bookingDetailsModal.classList.remove("hidden");
    bookingDetailsModal.classList.add("flex");
}

function closeBookingDetails() {
    if (!bookingDetailsModal) return;
    bookingDetailsModal.classList.add("hidden");
    bookingDetailsModal.classList.remove("flex");
}

if (bookingDetailsModal) {
    bookingDetailsModal.addEventListener("click", function (event) {
        if (event.target === this) {
            closeBookingDetails();
        }
    });
}

/* ==========================================================
                    BOOKING ACTION MODALS
========================================================== */

function openBookingModal(time) {
    if (timeDisplay) timeDisplay.innerText = time;

    overlay.classList.remove("hidden");
    setTimeout(function () {
        overlay.classList.remove("opacity-0");
        confirmModal.classList.remove("hidden");
        setTimeout(function () {
            confirmModal.classList.remove("scale-95");
        }, 10);
    }, 10);
}

function closeModals() {
    if (
        !confirmModal.classList.contains("hidden") &&
        successModal.classList.contains("hidden")
    ) {
        showToast();
    }

    confirmModal.classList.add("scale-95");
    successModal.classList.add("scale-95");
    overlay.classList.add("opacity-0");

    setTimeout(function () {
        overlay.classList.add("hidden");
        confirmModal.classList.add("hidden");
        successModal.classList.add("hidden");
    }, 300);
}

function showSuccessModal() {
    confirmModal.classList.add("scale-95");

    setTimeout(function () {
        confirmModal.classList.add("hidden");
        successModal.classList.remove("hidden");

        setTimeout(function () {
            successModal.classList.remove("scale-95");
        }, 10);
    }, 300);
}

function showToast() {
    if (!toast) return;

    toast.classList.remove("translate-y-20", "opacity-0");
    setTimeout(function () {
        toast.classList.add("translate-y-20", "opacity-0");
    }, 3000);
}