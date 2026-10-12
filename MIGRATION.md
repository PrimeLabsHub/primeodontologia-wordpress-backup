# MIGRATION RUNBOOK — OnePress (Plus) → free `prime-odontologia` block theme

## Goal
Fully copy the current OnePress version of `primeodontologia.com.br` onto the free,
self-hosted **`prime-odontologia` block theme** (brandbook design, no license) and
retire **OnePress Plus** before its license runs out (deadline: this month).

## Source of truth
The block-theme project **`primeodontologia-wordpress`** is authoritative
(design + content). This backup (`prime-production-backup`) is the OnePress archive.

## Account / domain plan (recorded, not yet executed)
- **primeodontologia.blog** → WordPress.com **Personal** account (company:
  primeodontologiadigital). Move the Prime Odontologia site there.
- **primeodontologia.com.br** → WordPress.com **Business** account; **sync fully**
  (custom theme + content).
- "Both pages" = the two local projects: **Prime Odontologia Website**
  (block theme, `primeodontologia-wordpress`) and **Prime Production Backup**
  (OnePress, `prime-production-backup`).
- Plan tier note: the custom `prime-odontologia` theme can only be uploaded on
  **Business** (SFTP/SSH/WP-CLI). Personal on `.blog` cannot host the custom theme
  (directory themes only), so the full custom site belongs on Business/`.com.br`.
- Status: PLAN ONLY — no push/sync performed.

## Deploy guardrail (DEPLOYMENT.md) — always applies
- Content + theme only. **Never replace plugins. Never alter live wp-admin.**
- No full `all` push — use targeted `contents` / `themes`. Confirm target (255038635)
  + options before every push.

---

## PART A — Content parity (already covered by the block theme)
Every real OnePress dental article maps to a clean block post. The block theme is
**cleaner** (one post per topic vs OnePress duplicates).

| Block post (slug) | Replaces OnePress slug(s) |
|---|---|
| o-que-e-o-invisalign | invisalign-bh, invisalign-bh-2, invisalign-alinhador, invisalign, tratamento-invisalign |
| quanto-custa-o-tratamento-com-invisalign | custo-invisalign, preco-invisalign, valor-invisalign |
| por-que-escolher-o-invisalign | invisalign-porque |
| quando-usar-o-invisalign | (new) |
| quanto-tempo-dura-o-tratamento-com-invisalign | invisalign-quando, tempo-de-invisalign |
| qual-invisalign-escolher | qual-invisalign (+ page meu-sorriso) |
| qual-e-a-diferenca-do-invisalign | aparelho-invisalign(2723), diferenca-invisalign(2394/2196) |
| aparelho-invisalign-o-que-voce-precisa-saber | invisalign-aparelho |
| como-funciona-a-contencao-do-invisalign | contencao-invisalign(2390/2202) |
| manutencao-do-invisalign | invisalign-manutencao |
| limpeza-bucal-profissional | limpeza-bucal |
| o-que-e-placa | placa |
| dente-de-leite / apinhamento / mordidaaberta / diastema / gengiva / prognatismo / sobremordida / mordida-cruzada | same topics |
| invisalign-para-criancas / adolescentes / adultos | invisalign-criancas/adolescentes/adultos |
| invisalign-antes-e-depois | invisalign-antes-depois |
| invisalign-passo-a-passo | invisalign-passo-a-passo |
| sorriso-invisalign | sorriso-invisalign |
| tratamento-com-invisalign | tratatamento-invisalign, valor-invisalign |
| dentista-em-belo-horizonte | dentista-belo-horizonte, dentista, dentistabh |
| o-que-o-invisalign-pode-fazer-por-voce | (same title) |
| como-limpar-o-invisalign | page como-limpar-o-invisalign |
| o-que-e-placa | placa |

Pages: `Home→inicio`, `meu-sorriso→meu-sorriso`, `como-o-invisalign-funciona→(same)`,
`perguntas→perguntas`, `politica→politica`, `equipe→equipe`, `blog-home→blog`.

---

## PART B — Gaps (OnePress content NOT in block theme) — carry over
Status: **all cloned into the block project (this month).**
1. **Como é produzido o Invisalign?** (`invisalign-como-2`) — **CLONED** as post `/como-e-produzido-o-invisalign/` (featured img: invisalign-processo).
2. **O Invisalign garante dentes alinhados?** (`invisalign-garante`) — **CLONED** as post `/invisalign-garante-dentes-alinhados/` (featured img: invisalign-como-funciona; Instagram-feed shortcode removed, guide links re-pointed to block slugs).
3. **Conheça a nossa estrutura Clínica** (`prime-odontologia`) — **CLONED** as page `/nossa-estrutura-clinica/` (title “Conheça a Nossa Estrutura Clínica”, featured img: consultorio).
4. **Quando o Invisalign acaba?** — covered by `quanto-tempo-…` (no action).

---

## PART C — Full redirect map (old OnePress URL → new block URL)
Apply as 301 redirects at go-live so SEO is preserved.

| Old URL (segment) | → New URL (segment) |
|---|---|
| /invisalign-bh/ , /invisalign-bh-2/ , /invisalign/ , /invisalign-alinhador/ , /tratatamento-invisalign/ | /o-que-e-o-invisalign/ |
| /custo-invisalign/ , /preco-invisalign/ , /valor-invisalign/ | /quanto-custa-o-tratamento-com-invisalign/ |
| /invisalign-porque/ | /por-que-escolher-o-invisalign/ |
| /invisalign-quando/ , /tempo-de-invisalign/ | /quanto-tempo-dura-o-tratamento-com-invisalign/ |
| /qual-invisalign/ | /qual-invisalign-escolher/ |
| /aparelho-invisalign/ , /diferenca-invisalign/ | /qual-e-a-diferenca-do-invisalign/ |
| /invisalign-aparelho/ | /aparelho-invisalign-o-que-voce-precisa-saber/ |
| /contencao-invisalign/ | /como-funciona-a-contencao-do-invisalign/ |
| /invisalign-manutencao/ | /manutencao-do-invisalign/ |
| /limpeza-bucal/ | /limpeza-bucal-profissional/ |
| /placa/ | /o-que-e-placa/ |
| /dente-de-leite/ | /o-que-e-o-dente-de-leite/ |
| /apinhamento/ | /o-que-e-apinhamento-dentario/ |
| /mordidaaberta/ | /o-que-e-a-mordida-aberta/ |
| /diastema/ | /o-que-e-o-diastema/ |
| /gengiva/ | /como-cuidar-da-gengiva/ |
| /o-que-e-a-mordida-cruzada-ou-a-mordida-invertida/ | /o-que-e-a-mordida-cruzada/ |
| /prognatismo/ | /o-que-e-prognatismo/ |
| /sobremordida/ | /o-que-e-a-sobremordida/ |
| /invisalign-criancas/ | /invisalign-para-criancas/ |
| /invisalign-adolescentes/ | /invisalign-para-adolescentes/ |
| /invisalign-adultos/ | /invisalign-para-adultos/ |
| /invisalign-antes-depois/ | /invisalign-antes-e-depois/ |
| /invisalign-passo-a-passo/ | /invisalign-passo-a-passo/ |
| /sorriso-invisalign/ | /sorriso-invisalign/ |
| /dentista-belo-horizonte/ , /dentista/ , /dentistabh/ | /dentista-em-belo-horizonte/ |
| /o-que-o-invisalign-pode-fazer-por-voce/ | /o-que-o-invisalign-pode-fazer-por-voce/ |
| /invisalign-como-2/ | /como-e-produzido-o-invisalign/ |
| /invisalign-garante/ | /invisalign-garante-dentes-alinhados/ |
| /prime-odontologia/ | /nossa-estrutura-clinica/ |
| /come-limpar-o-invisalign/ | /como-limpar-o-invisalign/ |
| /como-o-invisalign-funciona/ | /como-o-invisalign-funciona/ |
| /perguntas-sobre-o-invisalign/ , /duvidas-invisalign/ | /perguntas-sobre-o-invisalign/ |
| /politica-de-privacidade/ | /politica-de-privacidade/ |
| /meu-sorriso/ | /meu-sorriso/ |
| /equipe/ | /equipe/ |
| /home-2/ , /homepage/ | / |

---

## PART D — Cleanup (do NOT carry over)
- Delete OnePress demo posts: `markup-html-tags-and-formatting`, `markup-text-alignment`, and the old sample portfolios.
- Consolidate duplicates (see Part A) — do not carry duplicated post slugs.

---

## PART E — Step-by-step execution (deadline: end of this month)
1. **Freeze content** — decide the 3 gap items (Part B): create or redirect.
2. **Media/featured images** — confirm all 30 block posts have thumbnails; re-import any
   missing brand photos.
3. **On-page SEO polish (block theme)** — add image alt text, one H1/page, meta
   description, OpenGraph image (these are clean to do in the block project).
4. **Structured data** — ship LocalBusiness/Dentist JSON-LD in the block theme's
   `functions.php` (no child-theme/DB hack needed).
5. **Redirects** — implement the Part C map (301) on the live site.
6. **Deploy** — `site_push` from `primeodontologia-wordpress` to 255038635, guarded:
   content + theme only, no plugins/wp-admin. Confirm target/options with user first.
7. **Verify live** — home, articles, blog, forms, `/wp-sitemap.xml`, structured data,
   and that redirects resolve.
8. **Retire OnePress Plus** — let the license lapse; keep this backup as archive.

## Risks / notes
- Go-live is a visible redesign (different structure). Coordinate timing with user.
- Always respect DEPLOYMENT.md. Keep each project clean: one canonical theme, no
  leftover child/experiment themes.
