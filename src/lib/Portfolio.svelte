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
          className="PLACEHOLDER"
          title="Opens in a new tab"
          src={portfolioItem.logo}
          alt={portfolioItem.title}
        />
      </div>
      <div class="portfolio-item-details">
        <div class="portfolio-item-title">
          <h3>
            {portfolioItem.title}
            {#if portfolioItem.subTitle}
              <span>({portfolioItem.subTitle})</span>
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
          <Link href={portfolioItem.url} target="_blank" className="button" text="Visit site" />
        </div>
      </div>
    </div>
  {/each}
</section>

<style>
  .portfolio-item {
    background-color: var(--color-bcakground-PLACEHOLDER);
    border-radius: var(--border-radius);
    margin: 0 auto var(--spacing-large) auto;
    max-width: var(--max-width-portfolio-item-logo);
    text-align: left;
  }

  .portfolio-item:last-child {
    margin-bottom: 0;
  }

  .portfolio-item-logo {
    display: flex;
  }

  .portfolio-item-details {
    line-height: 1.5;
    padding: var(--spacing-medium);
  }

  .portfolio-item-details > div:not(:last-child) {
    margin-bottom: var(--spacing-small);
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
    margin-bottom: var(--spacing-small);
    opacity: 0.5;
  }

  ul {
    list-style-type: square;
    padding-left: var(--spacing-medium);
  }

  li {
    font-size: 0.875rem;
  }

  .portfolio-item-link {
    text-align: center;
  }

  @media screen and (min-width: 960px) {
    .portfolio-item {
      display: flex;
      max-width: calc(960px - var(--spacing-large));
    }

    .portfolio-item-details {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      position: relative;
    }

    .portfolio-item-tech ul {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    .portfolio-item-link {
      position: absolute;
      right: var(--spacing-medium);
      top: var(--spacing-medium);
    }
  }
</style>