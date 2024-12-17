// Theme Management
class ThemeManager {
  constructor() {
    this.darkMode = document.querySelector(".dark-mode");
    this.lightIcon = this.darkMode.querySelector("span:nth-child(1)");
    this.darkIcon = this.darkMode.querySelector("span:nth-child(2)");
    this.init();
  }

  init() {
    // Load saved theme
    this.loadTheme();

    // Enable transitions after initial load
    requestAnimationFrame(() => {
      document.body.classList.add("theme-transition");
    });

    // Add event listener
    this.darkMode.addEventListener("click", () => this.toggleTheme());

    // Listen for system theme changes
    window
      .matchMedia("(prefers-color-scheme: dark)")
      .addEventListener("change", (e) => this.handleSystemThemeChange(e));
  }

  loadTheme() {
    const savedTheme = localStorage.getItem("theme");
    const prefersDark = window.matchMedia(
      "(prefers-color-scheme: dark)"
    ).matches;

    if (savedTheme === "dark" || (!savedTheme && prefersDark)) {
      document.documentElement.classList.add("dark-mode-variables");
      this.lightIcon.classList.remove("active");
      this.darkIcon.classList.add("active");
    } else {
      document.documentElement.classList.remove("dark-mode-variables");
      this.lightIcon.classList.add("active");
      this.darkIcon.classList.remove("active");
    }
  }

  toggleTheme() {
    const isDark = document.documentElement.classList.toggle(
      "dark-mode-variables"
    );
    this.lightIcon.classList.toggle("active");
    this.darkIcon.classList.toggle("active");

    // Save theme preference
    localStorage.setItem("theme", isDark ? "dark" : "light");
  }

  handleSystemThemeChange(e) {
    // Only react to system changes if no theme is saved
    if (!localStorage.getItem("theme")) {
      if (e.matches) {
        document.documentElement.classList.add("dark-mode-variables");
        this.lightIcon.classList.remove("active");
        this.darkIcon.classList.add("active");
      } else {
        document.documentElement.classList.remove("dark-mode-variables");
        this.lightIcon.classList.add("active");
        this.darkIcon.classList.remove("active");
      }
    }
  }
}

// Initialize theme manager
const themeManager = new ThemeManager();
