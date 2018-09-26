<div id="slider">
        <figure>
          <img id="imgSeize" src="{{asset('images/katekyohitmanreborn-1537832044788-1227.jpg')}}" alt>
          <img id="imgSeize" src="{{asset('images/gintama-1537832078600-6537.jpg')}}" alt>
          <img id="imgSeize" src="{{asset('images/onepiece-1535531652703-917.jpg')}}" alt>
          <img id="imgSeize" src="{{asset('images/anime-1537831945079-354.jpg')}}" alt>
          <img id="imgSeize" src="{{asset('images/')}}" alt>
        </figure>
      </div>
      
      <style>
      div#slider figure {
        position: relative; 
        width: auto%;
        margin: 0;
        padding: 0;
        font-size: 0;
        text-align: left;
      }
      div#slider figure img { width: 20%; height: auto; float: left; }
      div#slider { width: 100%; max-width: 100%; overflow: hidden }
      @keyframes slidy {
        0% { left: 0%; }
        20% { left: 0%; }
        25% { left: -100%; }
        45% { left: -100%; }
        50% { left: -200%; }
        70% { left: -200%; }
        75% { left: -300%; }
        95% { left: -300%; }
        100% { left: -400%; }
      }
      div#slider figure {
        position: relative;
        width: 500%;
        margin: 0;
        padding: 0;
        font-size: 0;
        left: 0;
        text-align: left;
        animation: 30s slidy infinite;
      }
      </style>