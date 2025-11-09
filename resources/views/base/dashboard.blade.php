@extends('layouts.app')

@section('content')
<div class="dashboard">
  <h1 class="dashboard-title glow-text">Your Servers</h1>

  <div class="server-grid">
    @foreach($servers as $server)
      <div class="server-card">
        <div class="server-header">
          <h2>{{ $server->name }}</h2>
          <p>{{ $server->identifier }}</p>
        </div>
        <div class="server-stats">
          <div class="stat">
            <span>CPU</span>
            <span class="value">{{ $server->usage->cpu ?? 0 }}%</span>
          </div>
          <div class="stat">
            <span>RAM</span>
            <span class="value">{{ $server->usage->memory ?? 0 }} MB</span>
          </div>
          <div class="stat">
            <span>Disk</span>
            <span class="value">{{ $server->usage->disk ?? 0 }} MB</span>
          </div>
        </div>
        <div class="server-actions">
          <form method="POST" action="/server/{{ $server->identifier }}/start">@csrf
            <button class="btn-glow small">Start</button>
          </form>
          <form method="POST" action="/server/{{ $server->identifier }}/restart">@csrf
            <button class="btn-glow small yellow">Restart</button>
          </form>
          <form method="POST" action="/server/{{ $server->identifier }}/stop">@csrf
            <button class="btn-glow small red">Stop</button>
          </form>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
