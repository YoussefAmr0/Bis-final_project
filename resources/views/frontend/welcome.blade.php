@extends("frontend.layout.app")

@section("content")

<section class="hero">
    <div class="hero-container">
      <div class="column-left">
        <h1 style="color: white">Unlock Your Freelancing Potential with Workspace!</h1>
        <p>
          Connect, collaborate, and succeed on a platform designed for the modern professional.
        </p>

        <button>GET STARTED FOR FREE</button>
      </div>
      <div class="column-right">
        <img
          src="{{asset('assets/img/image-1.svg')}}"
          alt="illustration
      "
          class="hero-image"
        />
      </div>
    </div>
  </section>

  <section class="services">

    <h2>Elevate Your Freelancing Game!</h2>

    <li>

      <h3>Join for free</h3>
      <p>Sign up for free to explore rising talents, browse projects and many more.</p>

    </li>

    <li>

      <h3>Post gigs and hire top talents</h3>
      <p>Hiring good freelancers doesn't have to be that difficult. Post a job and we can search for you.</p>

    </li>

    <li>

      <h3>Easily land your first gig</h3>
      <p>Workspace makes it easier for beginners to stand out and land their first job.</p>

    </li>

    <div class="servicesignup">
    <button>Sign up for free</button>
  </div>
  </section>


  <Section class="about-us">
    <h2 class="about-us-header">About us</h2>
    <div class="about-us-container">
      <div class="about-us-content">
          <img src="{{asset('assets/img/image2.jpeg')}}" alt="Nature" class="about-image">
          <div class="about-us-text-content">
              <h2>Welcome to Workspace, the freelancing platform where everyone has a fair shot at success!</h2>


      <p>Founded by a dynamic team of five visionaries, Workspace emerged from a simple yet powerful idea: to level the playing field in the freelancing world. </p>

        <p>Each of Lotfy, Youssef, Mazen, Mohamed, and Zyad, from diverse backgrounds but shared a common frustration with the existing freelancing platforms.</p>

      <p>We noticed that these platforms often favored those with an already extensive portfolio, making it daunting for newcomers to break into the freelancing scene.</p>

      <p>Driven by a passion for inclusivity and a desire to foster a supportive community, we created Workspace. Our mission is simple: to empower every freelancer, from the seasoned professionals to those just starting out, ensuring that everyone has an equal opportunity to showcase their talents and secure jobs.</p>
          </div>
      </div>
  </div>


  </Section>

  <section class="trending-skills">

    <div class="container">
      <h1>TOP SKILLS</h1>
      <div class="grid">
          <div class="columnx">
              <p>Generative AI Specialists</p>
              <p>Data Entry Specialists</p>
              <p>Video Editors</p>
              <p>Data Analyst</p>
              <p>Shopify Developer</p>
              <p>Ruby on Rails Developer</p>
              <p>Android Developer</p>
              <p>Bookkeeper</p>
              <p>Content Writer</p>
              <p>Copywriter</p>
              <p>Data Scientist</p>
              <p>Front-End Developer</p>
              <p>Game Developer</p>
              <p>Graphic Designer</p>
              <p>iOS Developer</p>
          </div>
          <div class="columnx">
              <p>JavaScript Developer</p>
              <p>Logo Designer</p>
              <p>Mobile App Developer</p>
              <p>PHP Developer</p>
              <p>Python Developer</p>
              <p>Resume Writer</p>
              <p>SEO Expert</p>
              <p>Social Media Manager</p>
              <p>Software Developer</p>
              <p>Software Engineer</p>
              <p>Technical Writer</p>
              <p>UI Designer</p>
              <p>UX Designer</p>
              <p>Virtual Assistant</p>
              <p>Web Designer</p>
          </div>
      </div>
  </div>


  </section>

  <section class="final">
    <div class="final-button">
    <button>
      GET STARTED FOR FREE

    </button>
  </div>
    <P>Already have an account? <span class="log">Log in</span></P>
  </section>


@endsection
