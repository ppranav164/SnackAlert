
# Snack Alert

Snack Alert is a simple, lightweight package that allows you to easily display alerts on your Laravel Livewire powered application. With just a line of code, you can quickly and easily add alert notifications to your livewire components.



## Screenshots

![App Screenshot](https://raw.githubusercontent.com/ppranav164/SnackAlert/main/screenshot.gif)


# Getting Started


Prerequisites

* Jquery
* Tailwind CSS
* Laravel Livewire

## Installation

Install via composer

```bash
composer require ppranav/snack-alert
```
    
Add front-end component in a template

```bash
<x-snack-alert />
```

Add styles component in a template

```bash
<x-snack-alert-styles />
```

Send a Alert in a livewire component class

```bash
SnackAlert::setAlert(‘Example Title’, ‘Example Message’, 'success')->show($this);
```




## Code Reference


#### setAlert($title, $message, $signal)->show($this)


| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `title`   | `string` | **Required**. Alert title |
| `message` | `string` | **Required**. Alert Message |
| `signal` | `string`  | **Required**. success, warning, info, error |


#### show($this)

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `context` | `\Livewire\Component` | **Required**. Livewire component class |


## License

[MIT](https://choosealicense.com/licenses/mit/)

