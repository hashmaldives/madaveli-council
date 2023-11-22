import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-thaana-textarea', IndexField)
  app.component('detail-thaana-textarea', DetailField)
  app.component('form-thaana-textarea', FormField)
})
