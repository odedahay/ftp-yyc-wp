 <!-- Footer -->
  <footer class="bg-neutral-950 text-white">
    <div class="wrapper py-12 grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="space-y-4 pr-16">
        <img src="./images/footer-logo.png" alt="FTP-YYC Logo" class="w-[180px] h-auto">
        <p class="text-sm text-white/70 leading-relaxed break-normal">
          Filipino Tech Professionals of YYC (FTP-YYC) is a volunteer-led community empowering Filipino tech
          professionals in Calgary, Canada.
        </p>
      </div>

      <div>
        <p class="font-semibold mb-4 text-white">Quick Links</p>
        <ul class="space-y-3">
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Home</a></li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">About</a></li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Events</a></li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Contact Us</a>
          </li>
        </ul>
      </div>

      <div>
        <p class="font-semibold mb-4 text-white">Categories</p>
        <ul class="space-y-3">
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Category 1</a>
          </li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Category 2</a>
          </li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Category 3</a>
          </li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Category 4</a>
          </li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Category 5</a>
          </li>
        </ul>
      </div>

      <div>
        <p class="font-semibold mb-4 text-white">Recent Topics</p>
        <ul class="space-y-3">
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Let's go with
              the game</a></li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Immigration
              resources for newcomers 2022</a></li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">Important &
              Beneficial as we're focused for</a></li>
          <li><a class="text-white/70 hover:text-white transition-colors duration-200 text-sm" href="#">A list featuring
              in the distant bay</a></li>
        </ul>
      </div>
    </div>

    <div class="border-t border-white/10">
      <div class="wrapper py-6 text-sm text-white/60">
        © <span id="y"></span> FTP‑YYC. All rights reserved.
      </div>
    </div>

    <script>document.getElementById('y').textContent = new Date().getFullYear()</script>
    <?php wp_footer(); ?>
  </footer>
</body>
<script>
  // This script is just to ensure Tailwind CSS is loaded correctly
  console.log('Tailwind CSS is ready to use!');
</script>
<script src="./js/script.js"></script>


</html>




