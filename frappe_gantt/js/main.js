(function() {
    var tasks = [
        {
            start: '2018-10-01 08:30:00',
            end: '2018-10-08 09:30:00',
            name: 'Redesign website',
            id: "Task 0",
            progress: 20
        },
        {
            start: '2018-10-03 09:30:00',
            end: '2018-10-06 09:00:00',
            name: 'Write new content',
            id: "Task 1",
            progress: 5,
            dependencies: 'Task 0'
        },
        {
            start: '2018-10-04 01:30:00',
            end: '2018-10-08 09:30:00',
            name: 'Apply new styles',
            id: "Task 2",
            progress: 10,
            dependencies: 'Task 1'
        },
    ]
    function init() {
        var gantt_chart = new Gantt("#gantt", tasks, {
            on_click: function (task) {
                console.log(task);
            },
            on_date_change: function(task, start, end) {
                console.log(task, start, end);
            },
            on_progress_change: function(task, progress) {
                console.log(task, progress);
            },
            on_view_change: function(mode) {
                console.log(mode);
            },
            view_mode: 'Hour',
            language: 'en'
        });
        console.log(gantt_chart);
    }

    document.addEventListener("DOMContentLoaded", function() {
        console.log("start application.");
        init();
    }, false);
})()
