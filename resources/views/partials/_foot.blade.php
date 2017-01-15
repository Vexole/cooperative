

      <footer class="line">
         <div class="box">
            @foreach($overalls as $overall)
            <div class="s-12 l-6">
               <p>Copyright &copy; {{$overall->year}}</p>
            </div>
            <div class="s-12 l-6">
               <a class="right">Design and coding by {{$overall->credit}}</a>
            </div>
            @endforeach
         </div>
      </footer>  

   </body>
</html>