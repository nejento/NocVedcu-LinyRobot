# 🤖 Líný robot

**Interaktivní webová minihra pro Noc vědců FM TUL**

---

## 📖 O projektu

**Líný robot** je zábavná webová hra vytvořená speciálně pro akci *Noc vědců* na Fakultě mechatroniky, informatiky a mezioborových studií TUL. Hráči se vydávají na cestu po budově školy, kde potkávají různé postavy a řeší úkoly s pomocí líného robota.

## ✨ Funkce

- 🗺️ **Interaktivní mapa budovy** s clickable oblastmi
- 💬 **Dialogový systém** s různými postavami
- 🎮 **Point-and-click gameplay**
- 📱 **Responsivní design** pro všechna zařízení
- 🎉 **Konfety efekty** při dokončení úkolů
- ⏰ **Časové řízení** - hra se aktivuje v určený čas

## 🛠️ Technologie

- **Frontend:** HTML5, CSS3, JavaScript (ES6+)
- **Framework:** Bootstrap 5
- **Backend:** PHP (pro časové řízení)
- **Grafika:** SVG ilustrace
- **Animace:** Confetti.js

## 🚀 Spuštění

1. **Klonování repozitáře:**
   ```bash
   git clone https://github.com/nejento/NocVedcu-LinyRobot.git
   ```

2. **Spuštění lokálního serveru:**
   ```bash
   # PHP built-in server
   php -S localhost:8000
   
   # Nebo použijte XAMPP, WAMP, MAMP
   ```

3. **Otevření v prohlížeči:**
   ```
   http://localhost:8000
   ```

## 📁 Struktura projektu

```
├── 📄 index.php           # Hlavní soubor s časovým řízením
├── 🎮 game.html          # Hlavní herní interface
├── ⏳ waiting.html       # Čekací stránka před spuštěním
├── 📂 assets/            # Obrázky, ikony a SVG grafika
├── 📂 css/               # Bootstrap a vlastní styly
└── 📂 js/                # JavaScript logika a knihovny
```

## 🎯 Gameplay

Hráči klikají na různé místnosti v mapě budovy FM TUL, kde:
- 🗣️ Mluví s postavami (studenti, profesoři, zaměstnanci)
- 🤖 Využívají schopnosti líného robota k řešení úkolů
- 🔍 Objevují různé laboratoře a kanceláře
- ✅ Plní mise a sbírají úspěchy

## 👥 Autoři

Vytvořeno pro **Fakultu mechatroniky, informatiky a mezioborových studií**  
**Technická univerzita v Liberci**

---

*Hra byla vytvořena v rámci akce Noc vědců 2020* 🌙🔬
