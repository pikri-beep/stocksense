# Technical Decisions

## 2026-06-22

### Decision

Use Laravel 12 as the main backend framework.

### Reason

* Modern Laravel ecosystem
* Long-term maintainability
* Large community support
* Suitable for portfolio and production projects

---

## 2026-06-22

### Decision

Use Blade + Livewire + Volt instead of React.

### Reason

* Faster development
* Simpler architecture
* Easier maintenance
* Lower complexity for solo development

---

## 2026-06-22

### Decision

Use Tailwind CSS.

### Reason

* Fast UI development
* Consistent design system
* Excellent Laravel integration

---

## 2026-06-22

### Decision

Use MySQL as primary database.

### Reason

* Stable
* Familiar
* Good Laravel support

---

## 2026-06-22

### Decision

Separate AI service from Laravel.

### Reason

* Machine Learning ecosystem is better in Python
* Easier scaling
* Clear separation of responsibilities

### Architecture

Laravel
↓
HTTP API
↓
FastAPI
↓
Machine Learning Model

---

## 2026-06-22

### Decision

Use XGBoost as first prediction model.

### Reason

* Easier implementation than LSTM
* Faster training
* Strong performance on tabular financial data

---

## 2026-06-22

### Decision

Follow Git Flow.

### Branches

main
develop
feature/*
bugfix/*

### Reason

* Cleaner development process
* Easier rollback
* Better collaboration

---

## 2026-06-22

### Decision

UI Style = Modern SaaS

### Inspiration

* Stripe
* Linear
* Vercel
* TradingView

### Reason

Professional appearance suitable for portfolio and future SaaS product.
