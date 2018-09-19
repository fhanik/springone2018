package demo.springone2018.saml.config;

import org.springframework.context.annotation.Configuration;
import org.springframework.core.annotation.Order;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.saml.provider.service.config.SamlServiceProviderSecurityConfiguration;

import static org.springframework.security.saml.provider.service.config.SamlServiceProviderSecurityDsl.serviceProvider;

@EnableWebSecurity
public class ServiceProviderSecurityConfiguration {


	@Configuration
	@Order(1)
	public static class SamlSecurity extends SamlServiceProviderSecurityConfiguration {
		private AppConfig appConfig;

		public SamlSecurity(BeanConfig beanConfig, AppConfig appConfig) {
			super(beanConfig);
			this.appConfig = appConfig;
		}

		@Override
		protected void configure(HttpSecurity http) throws Exception {
			super.configure(http);
			http.apply(serviceProvider())
				.configure(appConfig);
		}
	}

	@Configuration
	public static class ApplicationSecurity extends WebSecurityConfigurerAdapter {

		@Override
		protected void configure(HttpSecurity http) throws Exception {
			http
				.antMatcher("/**")
				.authorizeRequests()
				.antMatchers("/**").authenticated()
				.and()
				.formLogin().loginPage("/saml/sp/select");
		}
	}
}
