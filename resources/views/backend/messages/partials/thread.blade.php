{!! $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; !!}
<tr>

<td> {{ $thread->creator()->first_name }}</td>
<td>{{ $thread->participantsString(Auth::id(),['first_name','last_name']) }}</td>
<td> <a href="{{ route('admin.messages.show', $thread->id) }}">{{ $thread->subject }}</a></td>
<td>
    <a href="{{ route('admin.messages.show', $thread->id) }}">
    {{ $thread->latestMessage->body }}
    </a>
</td>
<td>2012/02/01</td>
<td><span class="badge badge-success">Active</span></td>
</tr>
