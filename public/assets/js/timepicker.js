$( document ).ready(function() {
    var options = {
        now: "12:35",
        twentyFour: false,
        upArrow: 'wickedpicker__controls__control-up',
        downArrow: 'wickedpicker__controls__control-down',
        close: 'wickedpicker__close',
        hoverState: 'hover-state',
        title: 'Timepicker',
        showSeconds: false,
        secondsInterval: 1,
        minutesInterval: 1,
        beforeShow: null,
        show: null,
        clearable: false,
    };
    $('.timepicker').wickedpicker(options);
    var timepicker = $('.timepicker').wickedpicker(); console.log(timepickers.wickedpicker('time'));
    var timepickers = $('.timepicker').wickedpicker(); console.log(timepickers.wickedpicker('time', 1)); //JS console: time of timepicker-two
  });