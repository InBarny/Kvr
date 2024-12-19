const steps = [
  {
    title: "Начало работы VRwin",
    completed: false,
    current: true,
  },
  {
    title: "Формирование команд",
    completed: false,
    current: false,
  },
  {
    title: "Создание VR приложения",
    completed: false,
    current: false,
  },
  {
    title: "Создание презентаций",
    completed: false,
    current: false,
  },
  {
    title: "Предзашита VR приложения",
    completed: false,
    current: false,
  },
  {
    title: "Зашита VR приложения",
    completed: false,
    current: false,
  },
  {
    title: "Оценка VR приложения",
    completed: false,
    current: false,
  },
];

function initializeSteps() {
  const container = document.querySelector(".steps-container");
  steps.forEach((step) => {
    const stepElement = document.createElement("div");
    stepElement.className = "step";

    const circle = document.createElement("div");
    circle.className = `circle ${step.completed ? "completed" : ""} ${
      step.current ? "current" : ""
    }`;

    const title = document.createElement("span");
    title.textContent = step.title;

    stepElement.appendChild(circle);
    stepElement.appendChild(title);
    container.appendChild(stepElement);
  });
}

function updateProgress() {
  const description = document.querySelector("textarea").value;
  if (description.trim()) {
    alert("Progress updated!");
  } else {
    alert("Please enter task description");
  }
}

// Initialize the steps when the page loads
document.addEventListener("DOMContentLoaded", initializeSteps);

const ctx = document.querySelector(".activity-chart");
const ctx2 = document.querySelector(".prog-chart");

new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "1",
      "2",
      "3",
      "4",
      "5",
      "6",
      "7",
      "8",
      "9",
      "10",
      "11",
      "12",
      "13",
      "14",
      "15",
      "16",
      "17",
      "18",
      "19",
      "20",
    ],
    datasets: [
      {
        label: "выполнено заданий",
        data: [
          1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
        ],
        backgroundColor: "#1e293b",
        borderWidth: 0,
        borderRadius: 6,
        hoverBackgroundColor: "#60a5fa",
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        border: {
          display: true,
        },
        grid: {
          display: true,
          color: "#1e293b",
        },
      },
      y: {
        ticks: {
          display: false,
        },
      },
    },
    plugins: {
      legend: {
        display: false,
      },
    },
    animation: {
      duration: 1000,
      easing: "easeInOutQuad",
    },
  },
});
