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

## Deploy

Automático con GitHub Pages: cada push a `main` publica el sitio (workflow en `.github/workflows/deploy.yml`). El dominio isodec.com.pe se configura con `public/CNAME` y los registros DNS en donweb.

El formulario de contacto abre el correo del visitante prellenado hacia informes@isodec.com.pe.
