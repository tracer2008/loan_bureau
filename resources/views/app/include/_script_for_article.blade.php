<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FinancialService",
      "name": "Бюро Займов",
      "description": "Микрозаймы на карту от 1 000 до 50 000 рублей для жителей г. {{ $city->cityName }}, {{ $city->regionName }}. Ставка 0,8% в день. ПСК 292% годовых. Оформление онлайн.",
      "url": "{{ url()->current() }}",
      "areaServed": {
        "@type": "City",
        "name": "{{ $city->cityName }}",
        "containedInPlace": {
          "@type": "AdministrativeArea",
          "name": "{{ $city->regionName }}"
        }
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "{{ $city->cityName }}",
        "addressRegion": "{{ $city->regionName }}",
        "addressCountry": "RU"
      },
      "priceRange": "1000-50000 RUB",
      "makesOffer": {
        "@type": "Offer",
        "name": "Микрозайм на карту",
        "description": "Займ от 1 000 до 50 000 ₽. Ставка 0,8% в день. ПСК 292% годовых.",
        "priceCurrency": "RUB",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "priceCurrency": "RUB",
          "minPrice": 1000,
          "maxPrice": 50000
        },
        "availability": "https://schema.org/InStock",
        "url": "{{ url()->current() }}"
      }
    }
</script>
