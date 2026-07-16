# isodec-web

Sitio corporativo de ISODEC — Investigación para el Desarrollo Sostenible. Publicado en https://isodec.com.pe.

## Desarrollo

Requiere Node 22.

```sh
npm install
npm run dev       # desarrollo en localhost:4321
npm run build     # genera dist/
npm run preview   # sirve dist/ localmente
```

## Deploy (GoDaddy)

1. `npm run build`
2. Subir el contenido de `dist/` a `public_html/` por cPanel o FTP.

El formulario de contacto usa `contact.php` (PHP del hosting) y envía a informes@isodec.com.pe.
