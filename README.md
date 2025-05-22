
# Animania.js 🎉

**Animania.js** is a lightweight, powerful, and easy-to-use JavaScript animation library that brings your website to life with smooth scroll, text, and continuous animations. Built using pure CSS and JavaScript, it enhances your user interface with beautiful effects and zero external dependencies.

---

## 🚀 Features

- 🌟 **Scroll Animations** — Animate elements when they enter the viewport.
- 🔁 **Repeat or Once** — Choose to animate elements once or every time they appear.
- 🔄 **Infinite Animations** — Looping effects that run continuously.
- ✨ **Text Animations** — Includes typing and reveal effects.
- ⚡ **Lightweight** — Zero dependencies, minimal footprint.
- 📱 **Responsive** — Works seamlessly on all devices.
- 🎨 **Customizable** — Control duration, easing, delay, repeat, and more with utility classes.

---

## 📦 Installation

### CDN (Recommended)

```html
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/yourusername/animania@main/css/animania.css" />

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/gh/yourusername/animania@main/js/animania.js"></script>
```

Replace `yourusername` with your actual GitHub username.

---

## ⚙️ Usage

### 1. Scroll Animations

```html
<div data-anim="fade-up" class="duration-fast ease-in">Hello Animania!</div>
```

#### Supported Attributes

| Attribute       | Description                                     |
|----------------|-------------------------------------------------|
| `data-anim`     | Animation type (`fade-up`, `zoom-in`, etc.)     |
| `data-repeat`   | `true` or `false` – whether to animate once or repeatedly |
| `data-anchor`   | Defines trigger point (`top-center`, etc.)      |
| `class`         | Utility classes like `duration-slow`, `ease-out` |

---

### 2. Text Animations

#### Typing Effect

```html
<h2 class="typing-text">Welcome to Animania</h2>
```

```js
textAnimania.startTextAnimation('.typing-text', 'typing', {
  speed: 100,
  repeat: true
});
```

#### Reveal Effect

```html
<h2 class="reveal-text">Reveal Me!</h2>
```

```js
textAnimania.startTextAnimation('.reveal-text', 'reveal', {
  speed: 80,
  repeat: false
});
```

---

## 🎨 Customization

### Duration Classes

- `duration-fast`
- `duration-normal`
- `duration-slow`

### Easing Classes

- `ease-in`
- `ease-out`
- `ease-in-out`
- `ease-bounce`

### Looping Animations

```html
<div data-anim="bounce" class="infinite duration-slow">Loop Forever</div>
```

---

## 🧪 Available Animations

### Fade

- `fade`
- `fade-up`
- `fade-down`
- `fade-left`
- `fade-right`

### Slide

- `slide-up`
- `slide-down`
- `slide-left`
- `slide-right`

### Zoom

- `zoom-in`
- `zoom-out`

### Rotate

- `rotate-in`
- `rotate-out`

### Attention Seekers

- `bounce`
- `flash`
- `pulse`
- `rubberBand`
- `shake`
- `swing`
- `tada`
- `wobble`
- `jello`

---

## 📜 License

This project is licensed under the **MIT License**.

```
MIT License

Copyright (c) 2025 [Your Name]

Permission is hereby granted, free of charge, to any person obtaining a copy...
```

---

## 🤝 Contributing

Contributions, suggestions, and feature requests are welcome. Feel free to submit a pull request or open an issue.

---

## 🌐 Useful Links

- 🔗 [Live Demo](https://yourusername.github.io/animania-demo)
- 📧 Email: yourname@example.com

> ⭐ Star this repository if you find it useful!
