<div>

    <div style="position: fixed; right: 10px; bottom: 30px;" class="notify-alert"></div>

    <script>

        var total = 0;
        var total_notified = 0;
        var last_id = 0;

        window.addEventListener('notifyUsers', event => {
            total  = total + event.detail.length;
            $(event.detail).each(function(key, val){
                var position = key + 1;
                alertSystem(val.title, val.message, position, val.signal, total, val.id);
                last_id = val.id;
            });
        })

        function alertSystem(title, message, initial_pos, signal, total_messages, alert_id)
        {
            setTimeout(() => {
                writeHtml(title, message, initial_pos, signal, alert_id);
                $('#snack-animate-' + initial_pos).addClass('snack-alert-bounce-in');
                closeAlert(initial_pos, total_messages, alert_id);
            }, initial_pos * 300);
        }

        function closeAlert(initial_pos, total_messages, alert_id)
        {
            setTimeout(() => {
                $('#snack-animate-' + alert_id).addClass('snack-alert-bounce-right-down');
                if(alert_id === last_id){ reset(); }
            }, initial_pos * 3000);
        }

        function reset()
        {
           setTimeout(() => {
                $('.notify-alert').empty();
           }, 1000);
        }

        function writeHtml(title, message, id, signal, alert_id)
        {
           var message = getMessage(title, message, id, signal, alert_id);

            $('.notify-alert').append(message);
        }

        function getMessage(title, message, id, signal, alert_id)
        {
            switch(signal)
            {
                case 'success': return formatMessage(title, message, 'text-green-700 bg-green-100 border-green-400', alert_id);
                break;

                case 'warning': return formatMessage(title, message, 'text-yellow-700 bg-yellow-100 border-yellow-400', alert_id);
                break;

                case 'error': return formatMessage(title, message, 'text-red-700 bg-red-100 border-red-400', alert_id);
                break;

                case 'info': return formatMessage(title, message, 'text-blue-700 bg-blue-100 border-blue-400', alert_id);
                break;

                default: return formatMessage(title, message, 'text-blue-700 bg-blue-100 border-blue-400', alert_id);
                break;
            }
        }


        function formatMessage(title, message, setting, alert_id)
        {
            var message =  `<div id="snack-animate-`+alert_id+`" class="relative px-4 py-3 m-3 `+setting+` border  rounded" role="alert">
                                <strong class="font-bold">`+title+`</strong>
                                <span class="block sm:inline">`+message+`</span>
                            </div> `;
            return message;
        }

    </script>

</div>
