<div class="taks">
    <div class="title">
        <input class="checkBox" type="checkbox"
        @if($data && $data['is_done'])
            checked
        @endif
        />
        <div class="tasks_title">{{$data['title'] ?? ''}}</div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{$data['description'] ?? ''}}</div>
    </div>
    <div class="action">
        <a href="{{route('task.edit', ['id' => $data['id']])}}" >
            <img src="/assets/images/icon-edit.png" alt="">
        </a>
        <a href="{{route('task.delete', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>
    </div>
</div>
