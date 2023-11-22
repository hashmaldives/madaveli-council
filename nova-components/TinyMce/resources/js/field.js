import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-tiny-mce', IndexField)
  app.component('detail-tiny-mce', DetailField)
  app.component('form-tiny-mce', FormField)
})
