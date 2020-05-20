<div class="flash-message flash-message-error">
    <div class="icon">
        {{ svg('icon-mood-sad') }}
    </div>
    <div class="text">
        {{ $message ?? session()->get('error') }}
    </div>
</div>
