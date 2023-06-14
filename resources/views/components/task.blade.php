<div class="taks">
    <div class="title">
        <input type="checkbox"
        @if($data['done'])
            checked
        @endif
        />
        <div class="tasks_title">{{$data['title'] ?? ''}}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{$data['category'] ?? ''}}</div>
    </div>
    <div class="action">
        <a href="{{$data['edit_url'] ?? ''}}" >
            <img src="/assets/images/icon-edit.png" alt="">
        </a>
        <a href="{{$data['delete_url'] ?? ''}}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>
    </div>
</div>
