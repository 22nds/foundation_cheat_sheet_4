        <script>
            document.write('<script src=' +
                ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
                '.js><\/script>')
        </script>
        <script src="js/foundation.min.js"></script>
        <script>
          $(document).foundation('orbit', {
              animation: 'fade',
              timer_speed: 2000,
              pause_on_hover: true,
              resume_on_mouseout: false,
              animation_speed: 500,
              stack_on_small: true,
              navigation_arrows: true,
              slide_number: true,
              container_class: 'orbit-container',
              stack_on_small_class: 'orbit-stack-on-small',
              next_class: 'orbit-next',
              prev_class: 'orbit-prev',
              timer_container_class: 'orbit-timer',
              timer_paused_class: 'paused',
              timer_progress_class: 'orbit-progress',
              slides_container_class: 'orbit-slides-container',
              bullets_container_class: 'orbit-bullets',
              bullets_active_class: 'active',
              slide_number_class: 'orbit-slide-number',
              caption_class: 'orbit-caption',
              active_slide_class: 'active',
              orbit_transition_class: 'orbit-transitioning',
              bullets: false,
              timer: false,
              variable_height: false,
              before_slide_change: function(){},
              after_slide_change: function(){}
            });
        </script>
    </body>
</html>