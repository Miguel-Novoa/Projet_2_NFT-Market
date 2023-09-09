@extends('layouts.header')
@section('titrePage', 'Home')

@section('contentMain')
<ul>
    <li><button>All</button></li>
    <li><button>Collectible</button></li>
    <li><button>Metaverse</button></li>
    <li><button>Utility</button></li>
    <li><button>Online video game</button></li>
</ul>
<section>
    @foreach ($nft as $nft)
    <article class="card">
        <figure>
            <img src="{{ asset($nft->image) }}" alt="nft">
            <figcaption class="card-caption">nft description</figcaption>
        </figure>
        <section>
            <ul>
                <li>{{$nft->title}}</li>
                <li>{{$nft->category}}</li>
            </ul>
            <p>{{$nft->price}} ETH</p>
        </section>
        @if ($nft->owner === null)
        <form action="{{ route('nft.buy', $nft) }}" method="post">
            @csrf
            <button type="submit">BUY</button>
        </form>
        @else
        <button>SOLD</button>
        @endif
    </article>
    @endforeach
</section>
@endsection

