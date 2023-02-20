<script>
  import imgSrcSainsburys from '../assets/sainsburys.png';
  import imgSrcTuClothing from '../assets/tu-clothing.jpeg';
  import imgSrcEurostar from '../assets/eurostar.jpg';
  import imgSrcArgos from '../assets/argos.jpg';
  import imgSrcJohnLewis from '../assets/john-lewis.gif';
  import imgSrcBritishAirways from '../assets/british-airways.jpg';
  import imgSrcNationalRailEnquiries from '../assets/national-rail-enquiries.jpg';
  import imgSrcEbuyer from '../assets/ebuyer.jpg';
  import imgSrcTealman from '../assets/tealman.png';
  import imgSrcTint from '../assets/tint.png';

  import Link from './Link.svelte';

  const portfolioData = [
    {
      title: 'Sainsbury\'s',
      url: '//about.sainsburys.co.uk/#brans-with-copy-and-logo-wrapper',
      logo: imgSrcSainsburys,
      date: 'October 2020 - Present',
      role: ['Digital Analytics Development'],
      tech: ['Adobe Analytics', 'Google Analytics', 'Tealium iQ / EventStream', 'JavaScript', 'HTML'
        , 'CSS']
    },
    {
      title: 'Tu Clothing',
      subTitle: 'Contract',
      url: '//tuclothing.sainsburys.co.uk',
      logo: imgSrcTuClothing,
      date: 'May 2020 - October 2020',
      role: ['Digital Analytics Development'],
      tech: ['Adobe Analytics', 'Tealium iQ', 'JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'Eurostar',
      subTitle: 'Contract',
      url: '//www.eurostar.com',
      logo: imgSrcEurostar,
      date: 'November 2018 - April 2020',
      role: ['Digital Analytics Development'],
      tech: ['Goolgle Analytics', 'Tealium iQ', 'JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'Argos',
      url: '//www.argos.co.uk',
      logo: imgSrcArgos,
      date: 'August 2017 - November 2018',
      role: ['Digital Analytics Development', 'A/B and Multivariate Test Development'],
      tech: ['Adobe Analytics', 'Tealium iQ / EventStream', 'JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'John Lewis',
      url: '//www.johnlewis.com',
      logo: imgSrcJohnLewis,
      date: 'August 2013 - July 2017',
      role: ['A/B and Multivariate Test Development'],
      tech: ['OpenText Optimost', 'JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'British Airways',
      url: '//www.britishairways.com/travel/home/public/en_gb',
      logo: imgSrcBritishAirways,
      date: 'August 2013 - July 2017',
      role: ['A/B and Multivariate Test Development'],
      tech: ['OpenText Optimost', 'JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'National Rail Enquiries',
      url: '//www.nationalrail.co.uk',
      logo: imgSrcNationalRailEnquiries,
      date: 'August 2013 - July 2017',
      role: ['A/B and Multivariate Test Development'],
      tech: ['OpenText Optimost', 'JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'Ebuyer',
      url: '//www.ebuyer.com',
      logo: imgSrcEbuyer,
      date: 'August 2013 - July 2017',
      role: ['A/B and Multivariate Test Development'],
      tech: ['OpenText Optimost', 'JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'Tealman',
      subTitle: 'Personal Project',
      url: '//chrome.google.com/webstore/detail/tealman/kbppiimbnpoalogphgccdikkjhjolmfn',
      logo: imgSrcTealman,
      date: 'January 2019 - Present',
      role: ['Chrome DevTools Extension Development'],
      tech: ['JavaScript', 'HTML', 'CSS']
    },
    {
      title: 'tint',
      subTitle: 'Personal Project',
      url: '//play.google.com/store/apps/details?id=com.temelm.tint',
      logo: imgSrcTint,
      date: 'December 2015 - August 2016',
      role: ['Hybrid Mobile App Development'],
      tech: ['Adobe PhoneGap', 'JavaScript', 'HTML', 'CSS']
    }
  ];
</script>

<section id="portfolio">
  <h1>Portfolio</h1>
  {#each portfolioData as portfolioItem}
    <div class="portfolio-item">
      <div class="portfolio-item-logo">
        <Link
          href={portfolioItem.url}
          target="_blank"
          title="Opens in a new tab"
          src={portfolioItem.logo}
          alt={portfolioItem.title}
          --img-max-width="256px"
        />
      </div>
      <div class="portfolio-item-details">
        <div class="portfolio-item-title">
          <h3>
            {portfolioItem.title}
            {#if portfolioItem.subTitle}
              <span>{portfolioItem.subTitle}</span>
            {/if}
          </h3>
        </div>
        <div class="portfolio-item-date">
          <h4>Date</h4>
          <ul>
            <li>{portfolioItem.date}</li>
          </ul>
        </div>
        <div class="portfolio-item-role">
          <h4>Role</h4>
          <ul>
            {#each portfolioItem.role as role}
              <li>{role}</li>
            {/each}
          </ul>
        </div>
        <div class="portfolio-item-tech">
          <h4>Tech</h4>
          <ul>
            {#each portfolioItem.tech as tech}
              <li>{tech}</li>
            {/each}
          </ul>
        </div>
        <div class="portfolio-item-link">
          <Link
            href={portfolioItem.url}
            target="_blank"
            className="button"
            title="Opens in a new tab"
            text="Visit site"
          />
        </div>
      </div>
    </div>
  {/each}
</section>

<style>
  .portfolio-item {
    background-color: var(--background-color-secondary);
    border-radius: var(--border-radius);
    box-shadow: 1px 1px 8px 1px rgba(0, 0, 0, 0.25);
    margin: 0 auto var(--spacing-lg) auto;
    padding: var(--spacing-md);
    text-align: left;
  }

  .portfolio-item:last-child {
    margin-bottom: 0;
  }

  .portfolio-item-logo {
    display: grid;
    place-items: center;
  }

  .portfolio-item-details > div:not(:last-child) {
    margin-bottom: var(--spacing-md);
  }

  .portfolio-item-date, .portfolio-item-role, .portfolio-item-tech {
    line-height: 1.5;
  }

  h3 {
    font-size: 1.25rem;
    font-weight: var(--font-weight-bold);
  }

  h3 span {
    font-size: 0.75rem;
    font-weight: var(--font-weight);
  }

  h4 {
    font-size: 1rem;
    font-weight: var(--font-weight-bold);
    opacity: 0.5;
  }

  ul {
    padding-left: var(--spacing-md);
  }

  ul li {
    font-size: 0.875rem;
  }

  @media screen and (max-width: 767px) {
    .portfolio-item {
      max-width: var(--min-width);
    }

    .portfolio-item-logo {
      margin-bottom: var(--spacing-md);
    }

    .portfolio-item-link {
      text-align: center;
    }
  }

  @media screen and (min-width: 768px) {
    .portfolio-item {
      display: grid;
      grid-template-columns: 3fr 4fr;
      max-width: calc(var(--max-width) * 0.9);
    }

    .portfolio-item-details {
      padding-left: var(--spacing-md);
    }
  }
</style>