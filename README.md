
# 🔔 ChangeAlert


> A lightweight, zero‑dependency JavaScript library for beautiful, fully‑customisable alert & toast notifications.

ChangeAlert lets you drop‑in **success, error, warning, and info** alerts with just one line of code. Extend it with custom icons, sounds, themes, callbacks, and more – all in **3&nbsp;KB gzipped**.

---

## 📸 Live Demo

![ChangeAlert demo](https://raw.githubusercontent.com/your‑repo/changealert/main/assets/demo.gif)

Or spin it up locally:

```bash
git clone https://github.com/your‑repo/changealert.git
cd changealert/demo
open index.html   # or just double‑click
```

---

## 📑 Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [API](#api)
- [Advanced Topics](#advanced-topics)
- [Browser Support](#browser-support)
- [Roadmap](#roadmap)
- [Contributing](#contributing)
- [License](#license)

---

## ✨ Features

| Feature | Description |
|---------|-------------|
| **4 alert types** | Success / Error / Warning / Info |
| **Themes** | Light & Dark – switch per call |
| **Sounds** | Default, custom, or muted |
| **Timeout & Hover Pause** | Auto‑dismiss with optional pause on hover |
| **Custom Icons** | Emoji or SVG |
| **Callbacks** | `onClick`, `onClose` |
| **No Dependencies** | Pure vanilla JS & CSS |
| **Tiny footprint** | ~3 KB min+gzip |

---

## 🚀 Getting Started

### 1. Download

Clone or grab the files:

```
/css/changealert.css
/js/changealert.js
```

### 2. Include

```html
<link rel="stylesheet" href="css/changealert.css">
<script src="js/changealert.js"></script>
```

> Place the script **before** `</body>` or use `defer`.

### 3. Fire an Alert

```html
<script>
  ChangeAlert.success("Hello World!");
</script>
```

That’s it! 🎉

---

## 🔧 Usage

### Basic

```js
ChangeAlert.error("Something went wrong!");
```

### Combining Options

```js
ChangeAlert.success("File uploaded!", {
  position: "bottom-left",
  timeout: 5000,
  theme: "dark",
  sound: true,
  icon: "🎉",
  onClick: () => console.log("User clicked the toast"),
  onClose: () => console.log("Toast dismissed")
});
```

---

## 📚 API

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| `type` | `string` | `"info"` | Alert type (`success`, `error`, `warning`, `info`) |
| `message` | `string` | — | Content of the alert |
| `position` | `string` | `"top-right"` | Position on screen |
| `timeout` | `number` | `3000` | Auto‑dismiss delay (ms) – `0` disables |
| `icon` | `string` | *depends on type* | Emoji / SVG / HTML |
| `theme` | `string` | `"light"` | `"light"` or `"dark"` |
| `sound` | `boolean \| string` | `undefined` | `true`, `false`, or custom URL |
| `closeButton` | `boolean` | `true` | Show ✖ button |
| `pauseOnHover` | `boolean` | `true` | Pause timer on hover |
| `onClick` | `function` | `null` | Fired when alert clicked |
| `onClose` | `function` | `null` | Fired when alert removed |

---

## 🛠 Advanced Topics

### Custom Themes

Add your own CSS class:

```css
.changealert.myTheme {
  background: linear-gradient(135deg,#42e695,#3bb2b8);
  color:#fff;
}
```

```js
ChangeAlert.success("Gradient!", { theme: "myTheme" });
```

### Custom Sounds

```js
ChangeAlert.warning("Low battery!", {
  sound: "https://example.com/low-battery.mp3"
});
```

### Programmatic Dismiss

```js
const toast = ChangeAlert.info("Will stay...", { timeout: 0 });
setTimeout(() => toast.close(), 10000);
```

---

## 🌐 Browser Support

| Chrome | Firefox | Safari | Edge | Mobile |
|--------|---------|--------|------|--------|
| 49+ | 45+ | 9+ | 15+ | iOS 9+, Android 5+ |

*(Graceful degradation on very old browsers – no animation)*

---

## 🗺 Roadmap

- [ ] Keyboard accessibility (focus management)  
- [ ] TypeScript definitions  
- [ ] Queue system / max toast count  
- [ ] CDN bundle via jsDelivr  

---

## 🤝 Contributing

1. Fork the repo
2. Create a branch: `git checkout -b feat/amazing-feature`
3. Commit & push: `git commit -m "Add amazing feature"`  
4. Open a Pull Request

Please run `npm run lint` and include tests.

---

## 📜 License

ChangeAlert is released under the [MIT license](LICENSE).

---

## 👤 Author

**Rajkumar** – [masterinwebdesign.com](https://masterinwebdesign.com)  
Connect: [Twitter](https://twitter.com/rajkumardev) • [LinkedIn](https://linkedin.com/in/rajkumardev)

> _Cool alerts for cool websites!_
