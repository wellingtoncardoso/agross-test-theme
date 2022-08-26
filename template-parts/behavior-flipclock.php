<script>
  
  var duration = document.getElementById("duration")

  var data = '2022/08/27'
  var lack = ( new Date(data).getTime() - new Date().getTime() ) / 1000
  var sec = Math.round(lack % 60)
  var min = Math.round(lack / 60 % 60)
  var hours = Math.round(lack / 60 / 60 % 24)
  var days = Math.round(lack / 60 / 60 / 24)
  var spans = document.querySelectorAll( '.itens' )

  setInterval( function(){
    if( sec == 0 ){
      sec = 60
      min--
    }
    if( min == 0 ){
      min = 60
      hours--
    }
    if( hours == 0 ){
      hours = 24
      days--
    }
    sec--
    var count = [ days, hours, min, sec ].forEach( function( item, i ){
      spans[i].innerHTML = item;
    } )
  }, 1000 )

  function start(){
    if( count > 0 ) {
      count -= 1
      if ( count == 0 ) {
        count = "Watch new video"
        duration.classList.add("item-on")
        duration.classList.remove("item-default")
      } else if( count < 10 ) {
        count = "0" + count
      }
      duration.innerText = count
      setTimeout( start, 100 )
    }
  }
  
</script>